// burger menu init
const hamburger = document.querySelector('.hamburger');
const navigation = document.querySelector('.header-navigation')
hamburger.addEventListener('click', function () {
  this.classList.toggle('is-active');
  navigation.classList.toggle('is-active');
})

// swiper slider init
const swiper = new Swiper('.swiper', {
  // Optional parameters
  autoplay: {
    delay: 3000,
    stopOnLastSlide: true,
    pauseOnMouseEnter: true,
  },
  direction: 'horizontal',
  effect: 'fade',
  speed: 2000,
  loop: true,
  fadeEffect: {
    crossFade: true,
  },
});

// live search handler
document.addEventListener('DOMContentLoaded', function () {
  if (window.location.pathname == '/pte/test') {
    const searchInput = document.getElementById('search');
    searchInput.addEventListener('input', function () {
      const query = searchInput.value;
      const regex = new RegExp(query, "gi");

      if (query.length > 3) {
        fetchData('/pte/test', 'POST', { query: query })
          .then(function (results) {
            displayResults(results);
          })
          .catch(function (error) {
            console.error('Error:', error);
          });
      }

      function mark() {
        let box = document.querySelectorAll(".question");
        box.forEach((element) => {
          element.innerHTML.replace(/(<mark class="highlight">|<\/mark>)/gim, "");
          element.innerHTML = element.innerHTML.replace(
            regex,
            '<mark class="highlight">$&</mark>'
          );
        });
      }

      if (query.length >= 5) {
        setTimeout(mark, 300);
      }
    });
  }

  function fetchData(url, method, data) {
    return fetch(url, {
      method: method,
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: new URLSearchParams(data),
    })
      .then(function (response) {
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        return response.json();
      });
  }

  function displayResults(results) {
    const resultsContainer = document.querySelector('.results');
    resultsContainer.innerHTML = '';

    results.forEach(function (result) {
      console.log(result);
      const item = document.createElement('div');
      item.classList.add('item')
      const question = document.createElement('div');
      question.classList.add('question')
      const questionP = document.createElement('p');
      questionP.textContent = `${result.quest}`;
      question.appendChild(questionP);
      if (result.quest_img) {
        const questImg = document.createElement('img');
        questImg.src = `/public/assets/img/db/${result.quest_img}`;
        question.appendChild(questImg);
      }
      item.appendChild(question);
      const answers = document.createElement('div');
      answers.classList.add('answers');
      let counter = 1;
      for (i in result) {
        if (result[`ans_${counter}_is_true`]) {
          const answer = document.createElement('p');
          answer.innerHTML = '- ' + result[`ans_${counter}`];
          answers.appendChild(answer);
        }
        if (i.match(/\bimg\w*/) && result[i]) {
          const ansImage = document.createElement('img');
          ansImage.src = `/public/assets/img/db/${result[i]}`;
          answers.appendChild(ansImage);
        }
        counter++;
      }
      item.appendChild(answers);
      resultsContainer.appendChild(item);
    });
  }
});

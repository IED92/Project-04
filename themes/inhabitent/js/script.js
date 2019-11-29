document.addEventListener('DOMContentLoaded', () => {
  const searchBtn = document.getElementById('search-toggle');
  const page = document.getElementById('site-wrapper');
  const searchForms = document.getElementsByClassName('search-field');
  const searchForm = searchForms[0];
  let isOpened = false;

  const openField = () => {
    searchForm.style.display = 'inline-block';
    setTimeout(
      function () {
        searchForm.style.width = '200px';
      }, 50);
    searchForm.focus();
    isOpened = true;
  }

  const closeField = () => {
    searchForm.style.width = '0px';
    setTimeout(
      function () {
        searchForm.style.display = 'none'
      }, 550);
    searchForm.value = '';
    isOpened = false;
  }

  page.addEventListener('click', function () {
    if (isOpened === true) {
      closeField();
    }
  });

  searchBtn.addEventListener('click', function () {
    if (isOpened === false) {
      openField();
    } else {
      closeField();
    }
  });
});
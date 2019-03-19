document.addEventListener('DOMContentLoaded', function() {

  var bookSection = document.querySelector('#books-sec');
  if(bookSection) {
    bookSection.addEventListener('click', sectionHandler);


    function sectionHandler(event) {
      if (event.target.classList.contains('book_watched')) {
        var btn = event.target;
        var bookId = btn.parentNode.getAttribute('data-book-id');
        var watchedCounter = document.querySelector('#watched_count');
        var currentCount = watchedCounter.textContent;

        doAjax({
          method: 'POST',
          url: 'logic/readed_book.php',
          data: 'watched_id=' + bookId,
          contentType: 'application/x-www-form-urlencoded',
          callback: function(){
            if(btn.classList.contains('book_watched_active') ) {
              btn.textContent = '(Havent readed)';
              --currentCount;
            } else {
              btn.textContent = '(Readed)';
              ++currentCount;
            }

            btn.classList.toggle('book_watched_active');
            watchedCounter.textContent = currentCount;
          }


        });
      }
    }
  }









});

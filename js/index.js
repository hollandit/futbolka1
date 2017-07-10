// при открытии модального окна
$('#callCustom').on('show.bs.modal', function (event) {
  // получить кнопку, которая его открыло
  var button = $(event.relatedTarget) 
  // извлечь информацию из атрибута data-content
  var content = button.data('content') 
  // вывести эту информацию в элемент, имеющий id="content"
  $(this).find('#content').html(content); 
})
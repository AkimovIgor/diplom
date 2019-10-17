/* Calendar begin */

function calendar(clas, year, month) {
    var Dlast = new Date(year,month + 1, 0).getDate(),
        D = new Date(year, month, Dlast),
        DNlast = new Date(D.getFullYear(), D.getMonth(), Dlast).getDay(),
        DNfirst = new Date(D.getFullYear(), D.getMonth(), 1).getDay(),
        calendar = '<tr>',
        month = ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"];
    if (DNfirst != 0) {
      for(var i = 1; i < DNfirst; i++) calendar += '<td>';
    }
    else{
      for(var i = 0; i < 6; i++) calendar += '<td>';
    }
    for(var i = 1; i <= Dlast; i++) {
      if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
        calendar += '<td class="today">' + i;
      }
      else{
        calendar += '<td>' + i;
      }
      if (new Date(D.getFullYear(),D.getMonth(), i).getDay() == 0) {
        calendar += '<tr>';
      }
    }
    for(var i = DNlast; i < 7; i++) calendar += '<td> ';
    document.querySelector('.' + clas + ' tbody').innerHTML = calendar;
    document.querySelector('.' + clas + ' thead td:nth-child(2)').innerHTML = month[D.getMonth()] + ' ' + D.getFullYear();
    document.querySelector('.' + clas + ' thead td:nth-child(2)').dataset.month = D.getMonth();
    document.querySelector('.' + clas + ' thead td:nth-child(2)').dataset.year = D.getFullYear();
    if (document.querySelectorAll('.' + clas + ' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
        document.querySelector('.' + clas + ' tbody').innerHTML += '<tr><td> <td> <td> <td> <td> <td> <td> ';
    }
    }
    calendar("calendar", new Date().getFullYear(), new Date().getMonth());
    // переключатель минус месяц
    document.querySelector('.calendar thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
      calendar("calendar", document.querySelector('.calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('.calendar thead td:nth-child(2)').dataset.month)-1);
    }
    // переключатель плюс месяц
    document.querySelector('.calendar thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
      calendar("calendar", document.querySelector('.calendar thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('.calendar thead td:nth-child(2)').dataset.month)+1);
    }

/* Calendar end */
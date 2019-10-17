

$('.delete').on('click', function(){
    var res = confirm('Подтвердить удаление?');
    if(!res) return false;
});

$('.sidebar-menu a').each(function(){
    var loc = window.location.protocol + '//' +  window.location.host + window.location.pathname;
    console.log(loc);
    var link = this.href;
    if(loc == link){
        $(this).parent().addClass('active');
        $(this).closest('.treeview').addClass('active');
    }
});

CKEDITOR.replace('editor1');
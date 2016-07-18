
function up() {
var key=$ ('#uid').val()    ;
if(key.length>0)
{
    $.post('http://localhost/Online_BookStore/login', {keyword: key},function(markup)
    {
        return 'hello';
    });
}
}
function down() {

}
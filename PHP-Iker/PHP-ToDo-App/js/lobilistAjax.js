$(function () {
$('#actions-by-ajax').lobiList({
        actions: {
            load: 'crud/load.php',
            insert: 'crud/insert.php',
            delete: 'crud/delete.php',
            update: 'crud/update.php'
        },
        afterItemAdd: function(){
            console.log(arguments);
        }
    });
});
(function() {
    var openDialog = document.getElementById('openDialog');
    var openModalDialog = document.getElementById('openModalDialog');
    var dialogWindow = document.getElementById('dialogWindow');

    openDialog.addEventListener('click', function() {
        dialogWindow.show();
    });
    openModalDialog.addEventListener('click', function() {
        dialogWindow.showModal();
    });
})();
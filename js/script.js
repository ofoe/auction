// DROPDOWN
var account = document.querySelector('.account');
var accountList = document.querySelector('.account__list');
account.addEventListener('click', function () {
    accountList.classList.toggle('show');
});

window.onclick = function (event) {
    if (!event.target.matches('.account')) {
        var accountList = document.getElementsByClassName("account__list");
        var i;
        for (i = 0; i < accountList.length; i++) {
            var openDropdown = accountList[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}







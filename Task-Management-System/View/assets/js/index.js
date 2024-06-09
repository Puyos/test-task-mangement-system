let path = location.href;

let parts = path.split("/")[3];


document.querySelector('#Dashboard').addEventListener('click', () => {
    location.href = `/${parts}/index.php/admin`;
});

document.querySelector('#add_project').addEventListener('click', () => {
    location.href = `/${parts}/index.php/create`;
});

document.querySelector('#add_user').addEventListener('click', () => {
    location.href = `/${parts}/index.php/create_user`;
});

document.querySelector('#admin_project').addEventListener('click', () => {
    location.href = `/${parts}/index.php/admin_list`;
});

document.querySelector('#admin_task').addEventListener('click', () => {
    location.href = `/${parts}/index.php/admin_task`;
});

document.querySelector('#admin').addEventListener('click', () => {
    location.href = `/${parts}/index.php/admin`;
});

document.querySelector('#logout').addEventListener('click', () => {
    location.href = `/${parts}/index.php/login`;
});


const appartArray = [];

fetchAnnounces()
  .then(function(data) {
    data.forEach(e => {
      appartArray.push(e);
    });
    displayAppartments();
  })
  .catch(function(error) {
    console.log(error);
  });

function displayAppartments() {
  const container = document.createElement('div');
  container.classList.add('container-admin-page');

  const menuTop = document.createElement('div');
  menuTop.classList.add('menu-top-admin-page');

  const containerImgMenuTop = document.createElement('div');
  containerImgMenuTop.classList.add('container-img-menu-top');
  const imgLogo = document.createElement('img');
  imgLogo.src = './public/CSS/Assets/logo.svg';
  containerImgMenuTop.appendChild(imgLogo);

  const infoMenuTop = document.createElement('div');
  infoMenuTop.classList.add('info-menu-top-admin-page');

  const containerImgInfoMenu = document.createElement('div');
  containerImgInfoMenu.classList.add('container-img-info-menu');
  const imgArrowLeft = document.createElement('img');
  imgArrowLeft.src = './public/CSS/Assets/arrowleftadmin.png';
  containerImgInfoMenu.appendChild(imgArrowLeft);

  const backLink = document.createElement('a');
  backLink.href = 'http://localhost/Reshome/index.php';
  backLink.classList.add('text-info-menu-top');
  backLink.textContent = 'Back';

  infoMenuTop.appendChild(containerImgInfoMenu);
  infoMenuTop.appendChild(backLink);

  const titleMenuTop = document.createElement('div');
  titleMenuTop.classList.add('title-menu-top');
  titleMenuTop.textContent = 'DASHBOARD ADMIN';

  menuTop.appendChild(containerImgMenuTop);
  menuTop.appendChild(infoMenuTop);
  menuTop.appendChild(titleMenuTop);

  const contentAdminPage = document.createElement('div');
  contentAdminPage.classList.add('content-admin-page');

  const navContentAdminPage = document.createElement('div');
  navContentAdminPage.classList.add('nav-content-admin-page');

  const containerLinkContentPage1 = document.createElement('div');
  containerLinkContentPage1.classList.add('container-link-content-page');
  const containerImgLink1 = document.createElement('div');
  containerImgLink1.classList.add('container-img-link');
  const imgLinkContentPage1 = document.createElement('img');
  imgLinkContentPage1.classList.add('img-link-content-page');
  imgLinkContentPage1.src = './public/CSS/Assets/logoappartadmin.png';
  containerImgLink1.appendChild(imgLinkContentPage1);
  const link1 = document.createElement('a');
  link1.href = 'http://localhost/Reshome/PageAdmin.php';
  link1.classList.add('text-link-content-page');
  link1.textContent = 'OVERVIEW';
  containerLinkContentPage1.appendChild(containerImgLink1);
  containerLinkContentPage1.appendChild(link1);

  const containerLinkContentPage2 = document.createElement('div');
  containerLinkContentPage2.classList.add('container-link-content-page');
  const containerImgLink2 = document.createElement('div');
  containerImgLink2.classList.add('container-img-link');
  const imgLinkContentPage2 = document.createElement('img');
  imgLinkContentPage2.classList.add('img-link-content-page');
  imgLinkContentPage2.src = './public/CSS/Assets/logoappartadmin.png';
  containerImgLink2.appendChild(imgLinkContentPage2);
  const link2 = document.createElement('p');
  link2.href = 'http://localhost/Reshome/PageAppartAdmin.php';
  link2.classList.add('text-link-content-page');
  link2.textContent = 'Announce';
  containerLinkContentPage2.appendChild(containerImgLink2);
  containerLinkContentPage2.appendChild(link2);

  const containerLinkContentPage3 = document.createElement('div');
  containerLinkContentPage3.classList.add('container-link-content-page');
  const containerImgLink3 = document.createElement('div');
  containerImgLink3.classList.add('container-img-link');
  const imgLinkContentPage3 = document.createElement('img');
  imgLinkContentPage3.classList.add('img-link-content-page');
  imgLinkContentPage3.src = './public/CSS/Assets/logoappartadmin.png';
  containerImgLink3.appendChild(imgLinkContentPage3);
  const link3 = document.createElement('p');
  link3.classList.add('text-link-content-page');
  link3.textContent = 'Users';
  containerLinkContentPage3.appendChild(containerImgLink3);
  containerLinkContentPage3.appendChild(link3);

  navContentAdminPage.appendChild(containerLinkContentPage1);
  navContentAdminPage.appendChild(containerLinkContentPage2);
  navContentAdminPage.appendChild(containerLinkContentPage3);

  const contentForm = document.createElement('div');
  contentForm.classList.add('content-form');

  appartArray.forEach((appart, index) => {
    const elementList = document.createElement('div');
    elementList.classList.add('element-list-overview-add');

    const indexElement = document.createElement('div');
    indexElement.classList.add('index-element-list-overview-add');
    const indexParagraph = document.createElement('p');
    indexParagraph.textContent = index + 1;
    indexElement.appendChild(indexParagraph);

    const infoElement = document.createElement('div');
    infoElement.classList.add('info-element-list-overview-add');
    const titleElement = document.createElement('h3');
    titleElement.classList.add('title-element-list-overview-add');
    titleElement.textContent = appart.name;
    infoElement.appendChild(titleElement);

    elementList.appendChild(indexElement);
    elementList.appendChild(infoElement);
    contentForm.appendChild(elementList);
  });

  container.appendChild(menuTop);
  container.appendChild(contentAdminPage);
  contentAdminPage.appendChild(navContentAdminPage);
  contentAdminPage.appendChild(contentForm);

  const body = document.body;
  body.appendChild(container);
}

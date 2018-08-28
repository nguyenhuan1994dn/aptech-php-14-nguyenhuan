function loadData() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState === 4 && request.status === 200) {

      var data = JSON.parse(request.response);
      renderData(data);
    }
  };
  request.open('GET', 'data.json', true);
  request.send();
}

function renderData(data) {
  var users = data.users;

  users.forEach(function (user, index) {
    //id
    var para1 = document.createElement('p');
    var node1 = document.createTextNode(user.id);
    para1.appendChild(node1);

    var element = document.getElementById('data-id');
    element.appendChild(para1);
    //name
    var para2 = document.createElement('p');
    var node2 = document.createTextNode(user.name);
    para2.appendChild(node2);

    var element = document.getElementById('data-name');
    element.appendChild(para2);
    //email
    var para3 = document.createElement('p');
    var node3 = document.createTextNode(user.email);
    para3.appendChild(node3);

    var element = document.getElementById('data-email');
    element.appendChild(para3);
  });
}
host = window.location.href;

$(".menu__btn").click(function () {
  $(".navbar").toggleClass("active");
  $(".sidebar_mob").toggleClass("active");
  $(".sidebar__nav_mob").toggleClass("active");
});

$(".myBtn1").click(function () {
  $(".modal1, .wind1").toggleClass("active");
});

$(".wind1").click(function () {
  $(".modal1, .wind1").toggleClass("active");
});
$(".close1").click(function () {
  $(".wind1,.modal1").toggleClass("active");
});

$(".myBtn2").click(function () {
  $(".modal2, .wind2").toggleClass("active");
});

$(".wind2").click(function () {
  $(".modal2, .wind2").toggleClass("active");
});
$(".close2").click(function () {
  $(".wind2,.modal2").toggleClass("active");
});

function clickPress(event) {
  if (event.keyCode == 13) {
    opic = document.getElementById("opicProfile").value;
    myOpicProfile = document.getElementById("myOpicProfile");

    console.log(opic.value);
    $.ajax({
      url: "/functions/changeOpic.php",
      type: "POST",
      dataType: "text",
      data: {
        opic: opic
      },
      success: function (data) {
        console.log(data);
        myOpicProfile.innerHTML = data;
      }
    });
  }
}

function toggleDisplay(e) {
  e = document.getElementById(e);
  e.style.display = e.style.display == "none" ? "block" : "none";
}

$(document).ready(function () {
  console.log(host);
  setInterval(function () {
    $.ajax({
      url: "/functions/update.php",
      type: "POST",
      dataType: "text",
      data: {}
    });
  }, 5000);

  // $.ajax({
  //   type: "POST",
  //   url: "functions/update.php",
  //   data: "data",
  //   dataType: "dataType",
  //   success: function (data) {
  //     console.log(data);
  //   }
  // });
});

function delResultTest(i, j) {
  $.ajax({
    url: "/functions/delResultTest.php",
    type: "POST",
    dataType: "text",
    data: {
      i: i,
      j: j
    },
    success: function (data) {
      console.log(data);
      // window.location.reload();
    }
  });
}

function selectAvatar(i) {
  if (i) {
    $(".profile__select__head").removeClass("open");
    $.ajax({
      url: "/functions/changeAvatar.php",
      type: "POST",
      dataType: "text",
      data: {
        i: i
      },
      success: function (data) {
        alert("Аватар изменён");
        window.location.reload();
        // window.location.href = "http://justnovanewka.loc/game.php?go=profile";
      }
    });
  }
}

function changeAvatar() {
  changeAvatarButton1 = $("#changeAvatarButton1");
  changeAvatarButton2 = $("#changeAvatarButton2");

  changeAvatarButton1.on("click", function () {
    $(".ChangeAvatarInt").toggleClass("active");
  });
}
changeAvatar();
function changeChame(e) {
  // let dark-themes-css
  let para = $("#changeTheme");
  para.toggleClass("active");

  if ($("#changeTheme").hasClass("active")) {
    document.head.innerHTML =
      document.head.innerHTML +
      '<link id="dark-themes-css" rel="stylesheet" href="/css/dark-theme.css">';
  }
  if (!$("#changeTheme").hasClass("active")) {
    $('<link rel="stylesheet" href="/css/dark-theme.css"></link>').remove();
    $("#dark-themes-css").remove();
  }
}

function exitButton(e) {
  $.ajax({
    url: "/functions/buttonExit.php",
    type: "POST",
    dataType: "post",
    data: $(this).serialize(),
    success: function (data) {
      setTimeout(function () {
        document.location.href = host + "main";
      }, 500);
    }
  });
}

/*
$(document).ready(function () {
  $("#formExit").submit(function (event) {
    // задаем функцию при срабатывании события "submit" на элементе <form>
    event.preventDefault(); // действие события по умолчанию не будет срабатывать
    setTimeout(function () {
      document.location.href = "http://localhost";
    }, 500);
  });
});


$(document).ready(function () {
  let exitButton = $("#exitButton");

  exitButton.on("click", function () {
    setTimeout(function () {
      document.location.href = "http://google.com";
    }, 500);
  });
});
*/
function autorize() {
  $('input[name = "submitAut"]').click(function (e) {
    let login = $('input[name = "loginAut"').val();
    let password = $('input[name = "passwordAut"').val();
    let info_message = $(".info_message");

    $(".info_message").text("");
    $.ajax({
      url: "/include/signup.php",
      type: "POST",
      dataType: "text",
      data: {
        login: login,
        password: password
      },
      success: function (data) {
        let dat = JSON.parse(data);
        switch (dat.type) {
          case "error":
            info_message.text(dat.message);
            break;
          case "true":
            info_message.text(dat.message);
            setTimeout(function () {
              document.location.href = host + "main";
            }, 500);
            break;
        }
      }
    });
  });
}

function Registration() {
  $('input[name = "submitReg"]').click(function (e) {
    // e.preventDefault();
    let login = $('input[name = "loginReg"').val();
    let password = $('input[name = "passwordReg"').val();
    let email = $('input[name = "emailReg"').val();
    let activ = $('input[name = "activReg"').val();
    let namee = $('input[name = "nameeReg"').val();
    let surname = $('input[name = "surnameReg"').val();
    let city = $('input[name = "cityReg"').val();

    let info_message = $(".info_message");
    $.ajax({
      url: "/include/some.php",
      type: "POST",
      dataType: "text",
      data: {
        login: login,
        password: password,
        email: email,
        activ: activ,
        namee: namee,
        surname: surname,
        city: city
      },
      success: function (data) {
        let dat = JSON.parse(data);
        console.log(dat);
        switch (dat.type) {
          case "error":
            info_message.text(dat.message);
            break;
          case "true":
            info_message.text(dat.message);
            setTimeout(function () {
              document.location.href = host;
            }, 500);
            break;
        }
      }
    });
  });
}

function hiddenAllInterface(e) {
  $(".adminion__interface_1").removeClass("active");
  $(".adminion__interface_2").removeClass("active");
  $(".adminion__interface_3").removeClass("active");
  $(".adminion__interface_4").removeClass("active");
  $(".adminion__interface_5").removeClass("active");
  $(".adminion__interface_6").removeClass("active");
  $(".adminion__interface_0").removeClass("active");
  $(".adminion__interface_10").removeClass("active");
}
function showFunctionInterface(i) {
  hiddenAllInterface(i);
  $(".adminion__interface_" + i).addClass("active");
}

$("#formAddCourse").submit(function (e) {
  e.preventDefault();
  nameAddCourse = $("#nameAddCourse").val();
  opicAddCourse = $("#opicAddCourse").val();
  photoAddCourse = $("#photoAddCourse").val();

  $.ajax({
    url: "/functions/addCourse.php",
    type: "POST",
    dataType: "text",
    data: {
      nameAddCourse: nameAddCourse,
      opicAddCourse: opicAddCourse,
      photoAddCourse: photoAddCourse
    },
    success: function (data) {
      alert(data);
    }
  });
});

$("#formDelUser").submit(function (e) {
  e.preventDefault();

  idDelUser = $("#idDelUser").val();

  $.ajax({
    url: "/functions/delUser.php",
    type: "POST",
    dataType: "text",
    data: {
      idDelUser: idDelUser
    },
    success: function (data) {
      alert(data);
    }
  });
});

$("#formDelCourse").submit(function (e) {
  e.preventDefault();

  idDelCourse = $("#idDelCourse").val();

  $.ajax({
    url: "/functions/delCourse.php",
    type: "POST",
    dataType: "text",
    data: {
      idDelCourse: idDelCourse
    },
    success: function (data) {
      alert(data);
    }
  });
});

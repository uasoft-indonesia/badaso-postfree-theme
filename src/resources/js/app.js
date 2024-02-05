import Alpine from "alpinejs";

function fetchData() {
  return {
    content: null,
    slug: ["postfree-theme"],
    posts: [],
    publishAt: "",
    configuration: [],
    siteTitle: "",
    navbarLogo: "",
    footerLogo: "",
    favicon: "",
    header: {},
    footer: "",
    thumbnail: null,

    themeContent() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.value;
          this.header = this.content.title.data;
          this.footer = this.content.footer.data;

          this.header = {
            heading: this.header.heading.data,
            subheading: this.header.subheading.data,
          };
        });
    },
    postContent() {
      fetch(`/badaso-api/module/post/v1/post?category=postfree`)
        .then((res) => res.json())
        .then((data) => {
          this.posts = data.data.posts;
          this.publishAt = this.posts.data[0].publishedAt;
          this.thumbnail = this.posts.data[0].thumbnail;
        });
    },

    postfreeConfiguration() {
      fetch(`/badaso-api/v1/configurations/fetch`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.configuration;

          for (let index = 0; index < this.content.length; index++) {
            if (this.content[index]["group"] == "postfreeTheme") {
              this.configuration = this.content[index]["value"];

              if (this.content[index]["key"] == "postfreeThemeSiteTitle") {
                this.siteTitle = this.content[index]["value"];
              } else if (this.content[index]["key"] == "postfreeThemeFavicon") {
                this.favicon = this.content[index]["value"];
              } else if (
                this.content[index]["key"] == "postfreeThemeNavbarIcon"
              ) {
                this.navbarLogo = this.content[index]["value"];
              } else if (this.content[index]["key"] == "postfreeThemeIcon") {
                this.footerLogo = this.content[index]["value"];
              }
            }
          }

          let favicon = document.getElementById("favicon");
          favicon.href = this.favicon;
        });
    },
  };
}
function formatDateTime(sDate, FormatType) {
  var lDate = new Date(sDate);
  var month = new Array(12);
  month[0] = "January";
  month[1] = "February";
  month[2] = "March";
  month[3] = "April";
  month[4] = "May";
  month[5] = "June";
  month[6] = "July";
  month[7] = "August";
  month[8] = "September";
  month[9] = "October";
  month[10] = "November";
  month[11] = "December";
  var weekday = new Array(7);
  weekday[0] = "Sunday";
  weekday[1] = "Monday";
  weekday[2] = "Tuesday";
  weekday[3] = "Wednesday";
  weekday[4] = "Thursday";
  weekday[5] = "Friday";
  weekday[6] = "Saturday";
  var hh = lDate.getHours() < 10 ? "0" + lDate.getHours() : lDate.getHours();
  var mi =
    lDate.getMinutes() < 10 ? "0" + lDate.getMinutes() : lDate.getMinutes();
  var ss =
    lDate.getSeconds() < 10 ? "0" + lDate.getSeconds() : lDate.getSeconds();
  var d = lDate.getDate();
  var dd = d < 10 ? "0" + d : d;
  var yyyy = lDate.getFullYear();
  var mon = eval(lDate.getMonth() + 1);
  var mm = mon < 10 ? "0" + mon : mon;
  var monthName = month[lDate.getMonth()];
  var weekdayName = weekday[lDate.getDay()];
  if (FormatType == 1) {
    return mm + "/" + dd + "/" + yyyy + " " + hh + ":" + mi;
  } else if (FormatType == 2) {
    return weekdayName + ", " + monthName + " " + dd + ", " + yyyy;
  } else if (FormatType == 3) {
    return mm + "/" + dd + "/" + yyyy;
  } else if (FormatType == 4) {
    var dd1 = lDate.getDate();
    return dd1 + "-" + Left(monthName, 3) + "-" + yyyy;
  } else if (FormatType == 5) {
    return mm + "/" + dd + "/" + yyyy + " " + hh + ":" + mi + ":" + ss;
  } else if (FormatType == 6) {
    return mon + "/" + d + "/" + yyyy + " " + hh + ":" + mi + ":" + ss;
  } else if (FormatType == 7) {
    return (
      dd +
      "-" +
      monthName.substring(0, 3) +
      "-" +
      yyyy +
      " " +
      hh +
      ":" +
      mi +
      ":" +
      ss
    );
  } else if (FormatType == 8) {
    return (
      weekdayName +
      ", " +
      monthName +
      " " +
      dd +
      " " +
      yyyy +
      ", " +
      hh +
      ":" +
      mi
    );
  }
}

function fetchAuthenticated() {
  return {
    token: localStorage.token,
    formLogin: {
      email: "",
      password: "",
    },
    formRegister: {
      name: "",
      username: "",
      phone: "",
      email: "",
      password: "",
      passwordConfirmation: "",
      address: "",
      gender: "",
    },
    formVerify: {
      email: "",
      token: "",
    },
    buttonLabel: "Register",

    userAuth() {
      fetch("/badaso-api/v1/auth/user", {
        method: "GET",
        headers: new Headers({
          Authorization: "bearer " + this.token,
        }),
      }).then((response) => {
        console.log(response, "res");
        if (response.status == 400) {
          document.getElementById("logout_desktop").style.display = "none";
        }
        if (response.status == 200) {
          document.getElementById("login_desktop").style.display = "none";
          document.getElementById("register_desktop").style.display = "none";
        }
      });
    },

    userLogin() {
      fetch("/badaso-api/v1/auth/login", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formLogin),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            this.formLogin.email = "";
            this.formLogin.password = "";
            localStorage.setItem("token", data.data.accessToken);
            document
              .getElementById("modal_login")
              .setAttribute("class", "modal");
            document.getElementById("logout_desktop").style.display = "inherit";
            document.getElementById("login_desktop").style.display = "none";
            document.getElementById("register_desktop").style.display = "none";
          }
        });
    },
    userLogOut() {
      fetch("/badaso-api/v1/auth/user", {
        method: "GET",
        headers: new Headers({
          Authorization: "bearer " + this.token,
        }),
      }).then((response) => {
        if (response.status == 200) {
          localStorage.clear();
          document.getElementById("login_desktop").style.display = "inherit";
          document.getElementById("register_desktop").style.display = "inherit";
          document.getElementById("logout_desktop").style.display = "none";
          document.getElementById("modal_close").setAttribute("class", "modal");
        }
        if (response.status == 400) {
          document.getElementById("logout_desktop").style.display = "none";
        }
      });
    },
    userRegister() {
      this.buttonLabel = "Submitting...";
      fetch("/badaso-api/v1/auth/register", {
        method: "POST",
        headers: {
          Accept: "application/json, text/plain, */*",
          "Content-Type": "application/json",
        },
        body: JSON.stringify(this.formRegister),
      })
        .then((res) => res.json())
        .then((data) => {
          if (data.errors == null) {
            localStorage.setItem("email", this.formRegister.email);
            this.formRegister.name = "";
            this.formRegister.username = "";
            this.formRegister.phone = "";
            this.formRegister.email = "";
            this.formRegister.password = "";
            this.formRegister.passwordConfirmation = "";
            this.formRegister.address = "";
            this.formRegister.gender = "";

            document
              .getElementById("modal_register")
              .setAttribute("class", "modal");
            document
              .getElementById("modal_verify")
              .setAttribute("class", "modal modal-open");
            document.getElementById("logout_desktop").style.display = "inherit";
            document.getElementById("login_desktop").style.display = "none";
            document.getElementById("register_desktop").style.display = "none";

            document
              .getElementById("modal_verify")
              .setAttribute("class", "modal modal-open");
            document.getElementById("email_user").innerHTML =
              window.localStorage.getItem("email");
          }
        });
    },
    userVerify() {
          let email = localStorage.getItem("email");

          fetch("/badaso-api/v1/auth/verify", {
            method: "POST",
            headers: {
              Accept: "application/json, text/plain, */*",
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              email,
              token: this.formVerify.token,
            }),
          })
            .then((res) => res.json())
            .then((data) => {
              if (data.errors == null) {
                this.formVerify.email = "";
                this.formVerify.token = "";
                localStorage.setItem("token", data.data.accessToken);
                document
                  .getElementById("modal_verify")
                  .setAttribute("class", "modal");
              }
            });
    },

    loginActive() {
      document
        .getElementById("modal_login")
        .setAttribute("class", "modal modal-open");
    },
    registerActive() {
      document
        .getElementById("modal_register")
        .setAttribute("class", "modal modal-open");
    },
    logOut() {
      document
        .getElementById("modal_close")
        .setAttribute("class", "modal modal-open");
    },

    modalActionClose() {
      document.getElementById("modal_login").setAttribute("class", "modal");
      document.getElementById("modal_close").setAttribute("class", "modal");
      document.getElementById("modal_register").setAttribute("class", "modal");
      document.getElementById("modal_verify").setAttribute("class", "modal");
    },
  };
}

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementById("topnavbar").style.display = "inherit";
  } else {
    document.getElementById("topnavbar").style.display = "none";
  }
}

window.fetchData = fetchData;
window.formatDateTime = formatDateTime;
window.fetchAuthenticated = fetchAuthenticated;

window.Alpine = Alpine;
Alpine.start();

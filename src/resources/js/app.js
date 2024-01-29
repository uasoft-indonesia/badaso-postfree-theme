import Alpine from "alpinejs";

function loadDataContent() {
  return {
    content: null,
    slug: ["postfree-theme"],


    loadPostfreeContent() {
      fetch(`/badaso-api/module/content/v1/content/fetch?slug=${this.slug[0]}`)
        .then((res) => res.json())
        .then((data) => {
          this.content = data.data.value;

        });
    },

  };
}

window.loadDataContent = loadDataContent;

window.Alpine = Alpine;
Alpine.start();

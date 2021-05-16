class Pages {
  constructor(params) {
    this.container = params.container;
    this.close = params.close;
    this.pages = params.pages;
    this.innerPages = params.innerPages;
    this.init();
  }

  init() {
    this.generateInnerPage();
    this.closeInnerPage();
  }

  generateInnerPage() {
    for (let i = 0; i < this.pages.length; i++) {
      const pages = this.pages[i];
      const innerPages = this.innerPages[i];
      document.querySelector(pages).addEventListener("click", () => {
        document.querySelector(this.container).classList.add("invisible");
        document.querySelector(innerPages).classList.remove("invisible");
        document.querySelector(innerPages).classList.add("scale-up");
      });
    }
  }

  closeInnerPage() {
    const close = document.querySelectorAll(this.close);
    for (let i = 0; i < close.length; i++) {
      const innerPages = this.innerPages[i];
      close[i].addEventListener("click", () => {
        document.querySelector(innerPages).classList.add("invisible");
        document.querySelector(this.container).classList.remove("invisible");
        document.querySelector(this.container).classList.add("scale-up");
      });

      // document.onkeydown = function(evt) {
      //     evt = evt || window.event;
      //     if (evt.keyCode == 27) {
      //         alert('Esc key pressed.');
      //     }
      // };

      // document.addEventListener("keydown", function(event) {
      //     if(event.keyCode === 27){
      //        //Esc key was pressed
      //    }
      // });
    }
  }
}

export { Pages };

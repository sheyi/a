document.addEventListener("DOMContentLoaded", () => {
  // Amis

  const $amis = document.getElementById("amis");
  //const $pied = document.getElementById("pied");

  if ($amis) {
    fetch("https://jgthms.com/amis/new.json")
      .then((response) => {
        if (!response.ok) {
          throw new Error(`HTTP error! Status: ${response.status}`);
        }

        return response.json();
      })
      .then((response) => {
        response.forEach((item) => {
          const el = document.createElement("a");
          el.className = "bd-ami";
          el.href = item.url;
          el.target = "_blank";
          el.title = item.title || item.id;

          if (item.color) {
            el.style = `--color: ${item.color};`;
          }

          const extension = item.svg ? ".svg" : ".png";
          const img = document.createElement("img");
          img.src = `https://jgthms.com/amis/images/${item.id}${extension}`;

          el.appendChild(img);

          if ($amis) {
            $amis.appendChild(el);
          }


        });
      });
  }



  // BURGERS

  // Get all "navbar-burger" elements
  const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Add a click event on each of them
  $navbarBurgers.forEach( el => {
    el.addEventListener('click', () => {

      // Get the target from the "data-target" attribute
      const target = el.dataset.target;
      const $target = document.getElementById(target);

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      el.classList.toggle('is-active');
      $target.classList.toggle('is-active');

    });
  });
  // BURGERS END

 
});

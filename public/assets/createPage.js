document
  .querySelector("#input-button")
  .addEventListener("submit", async (e) => {
    e.preventDefault();

    const author = document.querySelector("#form-author").value;
    const title = document.querySelector("#form-title").value;
    const publication = document.querySelector("#form-publication").value;

    const response = await fetch("/create", {
      method: "POST",
      body: JSON.stringify({
        author: author,
        title: title,
        year_of_publication: publication,
      }),
      headers: {
        "Content-type": "application/json; charset=UTF-8",
      },
    });

    if (!response.ok) {
      // TODO

      return;
    }

    window.location.href = "/";
  });

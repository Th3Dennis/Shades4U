let cardCounter = 0;
let rowCounter = 0;
fetch("./data.json")
    .then((response) => response.json())
    .then((json) => createCardsManager(json));
function createCardsManager(jsonArray) {
    let name;
    let picture;
    let rowName;
    jsonArray.forEach(function (item) {
        cardCounter++;
        name = item.name;
        picture = item.picture;
        switch (rowCounter) {
            case 0:
                rowName = "firstRow";
                break;
            case 1:
                rowName = "secondRow";
                break;
            case 2:
                rowName = "thirdRow";
                break;
            case 3:
                rowName = "firstRowSecondCarousel";
                break;
            case 4:
                rowName = "secondRowSecondCarousel";
                break;
            case 5:
                rowName = "thirdRowSecondCarousel";
                break;
        }
        console.log(rowName);
        if (cardCounter == 4) {
            cardCounter = 0;
            rowCounter += 1;
        }
        createCard(name, picture, rowName);
    });
}
function createCard(name, picture, rowName) {
    let row = document.getElementById(rowName);
    let column = document.createElement("div");
    column.classList.add("col-md-3");
    row.appendChild(column);
    let card = document.createElement("div");
    card.classList.add("card");
    column.appendChild(card);
    let img = document.createElement("img");
    img.classList.add("card-img-top");
    img.src = picture;
    card.appendChild(img);
    let cardBodyDiv = document.createElement("div");
    cardBodyDiv.classList.add("card-body");
    card.appendChild(cardBodyDiv);
    let p = document.createElement("p");
    p.classList.add("card-text");
    p.innerHTML = name;
    cardBodyDiv.appendChild(p);
}

let products = {
  data: [
   {
	  Icon:"01",
      HotelName: "Colombo Hotel 01",
      category:"Colombo",
      price:"100",
      image:"accommodatinImg/colombo01.jpg",
      roomTypes: ["Single"],
      hasAC: true
    },
	{
	  Icon:"02",
      HotelName: "Colombo Hotel 01",
      category:"Colombo",
      price:"150",
      image:"accommodatinImg/colombo01.jpg",
      roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"03",
      HotelName: "Colombo Hotel 02",
      category:"Colombo",
      price:"80",
      image:"accommodatinImg/colombo02.jpg",
      roomTypes: ["Single"],
      hasAC: true
    },
	{
	  Icon:"04",
      HotelName: "Colombo Hotel 02",
      category:"Colombo",
      price:"120",
      image:"accommodatinImg/colombo02.jpg",
      roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"05",
      HotelName: "Colombo Hotel 03",
      category:"Colombo",
      price:"150",
      image:"accommodatinImg/colombo03.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
	{
	  Icon:"06",
      HotelName: "Galle Hotel 01",
      category:"Galle",
      price:"100",
      image:"accommodatinImg/galle01.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
	{
	  Icon:"07",
      HotelName: "Galle Hotel 01",
      category:"Galle",
      price:"150",
      image:"accommodatinImg/galle01.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"08",
      HotelName: "Galle Hotel 02",
      category:"Galle",
      price:"150",
      image:"accommodatinImg/galle02.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
    {
	  Icon:"09",
      HotelName: "Galle Hotel 03",
      category:"Galle",
      price:"150",
      image:"accommodatinImg/galle03.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
	{
	  Icon:"10",
      HotelName: "Galle Hotel 03",
      category:"Galle",
      price:"200",
      image:"accommodatinImg/galle03.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
	{
	  Icon:"11",
      HotelName: "Kalutara Hotel 01",
      category:"Kalutara",
      price:"100",
      image:"accommodatinImg/kalutara01.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
    {
	  Icon:"12",
      HotelName:"Kalutara Hotel 02",
      category:"Kalutara",
      price:"150",
      image:"accommodatinImg/kalutara02.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
    {
	  Icon:"13",
      HotelName:"Kalutara Hotel 03",
      category:"Kalutara",
      price:"200",
      image:"accommodatinImg/kalutara03.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
	{
	  Icon:"14",
      HotelName: "Kalutara Hotel 01",
      category:"Kalutara",
      price:"250",
      image:"accommodatinImg/kalutara01.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"15",
      HotelName:"Kalutara Hotel 02",
      category:"Kalutara",
      price:"200",
      image:"accommodatinImg/kalutara02.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"16",
      HotelName:"Kandy Hotel 01",
      category:"Kandy",
      price:"100",
      image:"accommodatinImg/kandy01.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
    {
	  Icon:"17",
      HotelName:"Kandy Hotel 02",
      category:"Kandy",
      price:"150",
      image:"accommodatinImg/kandy02.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
    {
	  Icon:"18",
      HotelName:"Kandy Hotel 03",
      category:"Kandy",
      price:"120",
      image:"accommodatinImg/kandy03.jpg",
	  roomTypes: ["Single"],
      hasAC: true
    },
	 {
	  Icon:"19",
      HotelName:"Kandy Hotel 02",
      category:"Kandy",
      price:"200",
      image:"accommodatinImg/kandy02.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
    {
	  Icon:"20",
      HotelName:"Kandy Hotel 03",
      category:"Kandy",
      price:"250",
      image:"accommodatinImg/kandy03.jpg",
	  roomTypes: ["Double"],
      hasAC: true
    },
  ],
};

  for (let i of products.data) {
  //Create Card
  let card = document.createElement("div");
  
  //Card should have category and should stay hidden initially
  card.classList.add("card", i.category, "hide");
  
  
  //image div
  let imgContainer = document.createElement("div");
  imgContainer.classList.add("image-container");
  
  //img tag
  let image = document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  
  //container
  let container = document.createElement("div");
  container.classList.add("container");
  
  //Icon
  let icon = document.createElement("h4");
  icon.innerText = i.Icon;
  container.appendChild(icon);
  
  //Hotel name
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText = i.HotelName.toUpperCase();
  container.appendChild(name);
  
  //Room type and AC information
  let roomTypes = document.createElement("p");
  roomTypes.innerText = "Room types: " + i.roomTypes.join(", ");
  container.appendChild(roomTypes);
  let hasAC = document.createElement("p");
  hasAC.innerText = "Air conditioning: " + (i.hasAC ? "Yes" : "No");
  container.appendChild(hasAC);
  
  //price
  let price = document.createElement("h6");
  price.innerText = "$" + i.price;
  container.appendChild(price);
  
  //Add booking button
  let bookingBtn = document.createElement("button");
  bookingBtn.innerText = "Book Now";
  bookingBtn.addEventListener("click", function() {

  //Redirect to booking page
  window.location.href = "booking.html";
  });
  container.appendChild(bookingBtn);

  card.appendChild(container);
  document.getElementById("products").appendChild(card);
}


  //parameter passed from button (Parameter same as category)
  function filterProduct(value) {
  //Button class code
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button) => {
    //check if value equals innerText
    if (value.toUpperCase() == button.innerText.toUpperCase()) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });

  //select all cards
  let elements = document.querySelectorAll(".card");
  //loop through all cards
  elements.forEach((element) => {
    //display all cards on 'all' button click
    if (value == "all") {
      element.classList.remove("hide");
    } else {
      //Check if element contains category class
      if (element.classList.contains(value)) {
        //display element based on category
        element.classList.remove("hide");
      } else {
        //hide other elements
        element.classList.add("hide");
      }
    }
  });
  }

  //Search button click
  document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      cards[index].classList.remove("hide");
    } else {
      //hide others
      cards[index].classList.add("hide");
    }
  });
  });

  //Initially display all products
  window.onload = () => {
	filterProduct("all");
  };

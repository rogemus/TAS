var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 300
});

var elem = document.querySelector('.grid2');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item2',
  columnWidth: 375
});

$('.thumbnail-img').featherlight();

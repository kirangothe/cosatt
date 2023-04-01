/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

load_data();

function load_data() {
  var table = $('#maintable').DataTable({
    processing : true,
    serverSide : true,
    ajax : {
      url : $('#maintable').attr('data-url'),
    },
    columns : [
      {data : 'id', name : 'id'},
      {data : 'news_date', name : 'news_date'},
      {data : 'title', name : 'title'},
      {data : 'cat_id', name : 'cat_id'},
      {data : 'publish', name : 'publish'},
      {data : 'action', name : 'action'},
    ],
    "ordering" : false
  });

  let hidecolumn = $('#maintable').data('hidecolumn');
  if(!hidecolumn) {
      table.column( 5 ).visible( false );
  }
}

$('#maintable').on('draw.dt', function () {
  $('[data-toggle="tooltip"]').tooltip();
})

function confirmDelete() {
  var r = confirm("Are you sure want to delete this record?");
  if (r == false) {
      return false;
  }
}
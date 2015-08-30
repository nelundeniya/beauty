$(document).foundation();
$("#location").autocomplete({
      source: "/get_towns",
      select: function (event, ui) {
        $("#city_id").val(ui.item.id);
      }
    });
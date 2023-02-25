jQuery(document).ready(function() {
  jQuery('.minus').click(function () {
    var $input = jQuery(this).parent().find('input');
    var count = parseInt($input.val()) - 1;
    count = count < 1 ? 1 : count;
    $input.val(count);
    $input.change();
    return false;
  });
  jQuery('.plus').click(function () {
    var $input = jQuery(this).parent().find('input');
    $input.val(parseInt($input.val()) + 1);
    $input.change();
    return false;
  });
});

// input isNumber
function isNumber(n) {
    return /\d/.test(String.fromCharCode(n));
}
$("#only-number").keypress(function(event) {
    return isNumber(event.keyCode);
});

  $("#only-number-VAT").keypress(function(event) {
    return isNumber(event.keyCode);
  });

// percent and amount
$(document).on("change", "#select-percent", function() {
    let percent = $(this).val();
    if (percent == "percent") {
        
    }
    else {
        console.log("amount");  
    }
});  

// Show and hide VAT
$("#only-number-VAT").hide();
$(function () {
    $("#check-vat").click(function () {
        if ($(this).is(":checked")) {
            $("#only-number-VAT").show();
            console.log("checked");
        } else {
            $("#only-number-VAT").hide();
        }
    });
});

// Add comma to number
function addCommas(num) {
    var str = num.toString().split('.');
    if (str[0].length >= 4) {
        str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1,');
    }
    return str.join('.');
}

  $(document).ready(function(){
    $("#only-number").keyup(function(event){
      if(event.which >= 37 && event.which <= 40){
          event.preventDefault();
      }
      var $this = $(this);
      var num = $this.val().replace(/,/gi, "");
      var num2 = addCommas(num);
      $this.val(num2);
  });
});

// max min
    document.querySelector("*[name=ccdate]").addEventListener("input", function(){
        var num = +this.value, max = 100, min = 0;
        if (!this.value.length) return false;
        this.value = isNaN(num) ? min : num > max ? max : num < min ? min : num;
    });



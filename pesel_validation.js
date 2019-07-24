function validatePesel(pesel) {
  // PESEL:
  // 11 digits numbers. Last digit is control digit verified against expression for the first 10 digits. Exp: (1*a + 3*b + 7*c + 9*d + 1*e + 3*f + 7*g + 9*h + 1*i + 3*j) last digit of the result is substracted from 10 and compared with the control digit.

  var reg = /^\d{11}$/;
  if (!reg.test(pesel)) {
      return false;    
  }
  
  var dig = (""+pesel).split("");
  var control = (1*parseInt(dig[0]) + 3*parseInt(dig[1]) + 7*parseInt(dig[2]) + 9*parseInt(dig[3]) + 1*parseInt(dig[4]) + 3*parseInt(dig[5]) + 7*parseInt(dig[6]) + 9*parseInt(dig[7]) + 1*parseInt(dig[8]) + 3*parseInt(dig[9]))%10;

  if(control === 0) {
    control = 10;
  }
  control = 10 - control;
  if(parseInt(dig[10]) === control) {
    //console.log("Valid"); 
    return true;
  } else {
    return false;
  }
   
}

//validatePesel(341217907289);
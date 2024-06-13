<!DOCTYPE html>
<html>
  <head>
    <title>Log In</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="signUpContainer">
      <div class="mainCard">
        <div class="right">
          <h2>Sign Up</h2>
          <form action="./sign-up-submit.php" method="POST" id="myForm" name=signUpForm>
            <table>
              <tbody>
                <tr>
                  <td>
                    <label for="firstNameInput" id="firstName">First Name</label>
                    <input type="text" name="fName" id="firstNameInput" placeholder="Enter Your First Name" required />
                    <br>
                    <span id="firstNameRequire">First name Require</span>
                  </td>

                  <td>
                    <label for="lastNameInput" id="lastName">Last Name</label>
                    <input type="text" name="lName" id="lastNameInput" placeholder="Enter Your last Name" required />
                    <br>
                    <span id="lastNameRequire">Last name Require</span>
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <label for="addressInput" id="address">Address</label>
                    <input type="address" name="address" id="addressInput" placeholder="Enter Your Address" required />
                    <br>
                    <span id="addressRequire">Address Require</span>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="emailImpute" id="email">Email</label>
                    <input type="email" name="email" id="emailImpute" placeholder="Enter Your email" required style="margin-bottom:0;" />
                    <br>
                    <span id="emailRequire">Correct email require</span>
                  </td>
 
                  <td>
                    <label for="mobileInput" id="mobile">Mobile No.</label>
                    <input type="tel" name="mobile" id="mobileInput" placeholder="Enter Your mobile Number" required />
                    <br>
                    <span id="mobileRequire">Mobile Number Require</span>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <label for="passwordInput" id="password">Password</Address></label>
                    <input type="password" name="pass1" id="passwordInput" placeholder="Enter Your Password" required />
                    <br>
                    <span id="passwordRequire">Please Enter Password</span><br>
                    <div class=agreeCheck>
                    <input type="checkbox" name="condition" id="check-box">
                    <span style="visibility: visible;" id="check-box-text">I Agree terms & conditions</span>
                    </div>
                  </td>
 
                  <td>
                    <label for="passwordInputRe" id="password">Re-Password </label>
                    <input type="password" name="pass2" id="passwordInputRe" placeholder="Enter Your mobile" required />
                    <br>
                    <span id="rePasswordRequire">Please enter Re-password</span> <br>
                    <span id="rePasswordRequireSame">Please enter same password</span>
                  </td>

                </tr>
                
              </tbody>
            </table>
            <button type="button" onclick="submitForm()">Sign Up</button>
            <p class="signUpLink">
              If you have an account <a href="./login.php">Log In</a>
            </p>
          </form>
        </div>
      </div>
    </div>

    <script>
      function submitForm(){

        let fName = document.getElementById("firstNameInput");
        let LName = document.getElementById("lastNameInput");
        let address = document.getElementById("addressInput");
        let email = document.getElementById("emailImpute");
        let mobile = document.getElementById("mobileInput");
        let password1 = document.getElementById("passwordInput");
        let password2 = document.getElementById("passwordInputRe");
        let agreement = document.getElementById("check-box");
        let checkBoxText = document.getElementById("check-box-text");

        if(fName.value.length == 0){
          document.getElementById("firstNameRequire").style="visibility: visible;"
          document.signUpForm.fName.focus();
          return false;
        }else{
          document.getElementById("firstNameRequire").style="visibility: hidden;"
        }
        
        if(LName.value.length == 0){
          document.getElementById("lastNameRequire").style="visibility: visible;"
          document.signUpForm.lName.focus();
          return false;
        }else{
          document.getElementById("lastNameRequire").style="visibility: hidden;"
        }
        
        if(address.value.length == 0){
          document.getElementById("addressRequire").style="visibility: visible;"
          document.signUpForm.address.focus();
          return false;
        }else{
          document.getElementById("addressRequire").style="visibility: hidden;"
        }
        
        if(email.value.length == 0 || !email.value.includes("@") || !email.value.includes(".")){
          document.getElementById("emailRequire").style="visibility: visible;"
          document.signUpForm.email.focus();
          return false;
        }else{
          document.getElementById("emailRequire").style="visibility: hidden;"
        }
        
        
        if(mobile.value.length == 0){
          document.getElementById("mobileRequire").style="visibility: visible;"
          document.signUpForm.mobile.focus();
          return false;
        }else{
          document.getElementById("mobileRequire").style="visibility: hidden;"
        }
        
        if(password1.value.length == 0){
          document.getElementById("passwordRequire").innerHTML = "Please Enter Password";
          document.getElementById("passwordRequire").style="visibility: visible;"
          document.signUpForm.pass1.focus();
          return false;
        }else{
          // Validation of lower case
          var lowerCaseLetters = /[a-z]/g;
          if(password1.value.match(lowerCaseLetters)) {
            document.getElementById("passwordRequire").style="visibility: hidden;"
          }else{
            document.getElementById("passwordRequire").innerHTML = "Password must be strong (0-9, a-z, A-z)";
            document.getElementById("passwordRequire").style="visibility: visible;";
            return false;
          }
          // Validate capital letters
          var upperCaseLetters = /[A-Z]/g;
          if(password1.value.match(upperCaseLetters)) {
            document.getElementById("passwordRequire").style="visibility: hidden;"
          }else{
            document.getElementById("passwordRequire").innerHTML = "Password must be strong use 0-9, a-z, A-Z";
            document.getElementById("passwordRequire").style="visibility: visible;";
            return false;
          }

          // Validate numbers
          var numbers = /[0-9]/g;
          if(password1.value.match(numbers)) {
            document.getElementById("passwordRequire").style="visibility: hidden;"
          }else{
            document.getElementById("passwordRequire").innerHTML = "Password must be strong use 0-9, a-z, A-Z";
            document.getElementById("passwordRequire").style="visibility: visible;";
            return false;
          }
        }
        
        if(password2.value.length == 0){
          document.getElementById("rePasswordRequireSame").style="visibility: hodden;"
          document.getElementById("rePasswordRequire").style="visibility: visible;"
          document.signUpForm.pass2.focus();
          return false;
        }else{
          document.getElementById("rePasswordRequire").style="visibility: hidden;"


          // Checking password is same or not
          if(password1.value != password2.value){
            document.getElementById("rePasswordRequireSame").style="visibility: visible;"
            document.signUpForm.pass2.focus();
            return false;
          }else{
            document.getElementById("rePasswordRequire").style="visibility: hidden;"
          }
        }

        agreement.checked ? document.getElementById("myForm").submit() : (
          checkBoxText.style="color:red; visibility: visible;"
        );
      }
    </script>
  </body>
</html>

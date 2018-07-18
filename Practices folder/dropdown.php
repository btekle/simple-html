<<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Page2</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>

    
  <body>
 
      <form action="/action_page.pnp" method="GET">
           <div class="form-group">
          
              <h1>Contact Me</h1>
              
            
              First name:<br>
              <input type="text" name="firstname" value="" class="form-control"><br/><br/>
              
              Last name:<br>
              <input type="text" name="lastname" class="form-control"><br/><br/>
              
              <textarea name="message" row="20" cols="50" class="form-control">
              </textarea>
              <br/><br/>
              
              
              Send Email To:<br/>
              
              <select name="department" class="form-control">
                <option value="tech">tech support</option>
                <option value="sales">Sales</option>
                <option value="accounting">accounting</option>
                <option value="ceo">CEO</option>
              </select>
              
              <br/><br/><br/>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <button type="button" class="btn btn-primary">Send Email</button>
            </div>
      </form>  
    
    
    
    <br/><br/>

&copy; Biniam Tekle - All Right Reserved
    
    
 </body>

</html>

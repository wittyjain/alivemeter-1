<footer id="footer">
  <div class="text-center padder clearfix" style="text-align:left;">
    <p> <small>&copy; Nutrion 2014</small><br>
      <br>
      </p>
  </div>
</footer>
<script>
	setTimeout(function(){CallMadhu()},500);

	function CallMadhu()
	{
		 includeJS();
	}
	 function includeJS(){
		 var scriptElement = document.createElement('script');
		scriptElement.type = "text/javascript";
		scriptElement.src = "css/app.v1.js";
		 document.getElementsByTagName('head')[0].appendChild(scriptElement);
		 
     }
</script> 
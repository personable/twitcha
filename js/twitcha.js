	var statusarray=[];
	var inputfind;
	var inputreplace;
	var inputfindregexp;
	var totalclick=0;
	var clicksonload;
	var updatedclicks;
	  
	function startitup() 
		{
		inputfind=document.twitchform.wordstofind.value;
		inputreplace=document.twitchform.wordstoreplace.value;
		inputfindregexp=new RegExp(inputfind,"gi");
		prepstatus();
		
		window.setTimeout(function() {	
			  $('.tweet_text').each(function () {
			  var statuses = $(this);
			  statusarray.push(statuses);
			  replacestatus();
			  $('#progressmessage').hide();
			  $('#twitchsubmit').replaceWith('<div id="twitchsubmit"><input type="submit" class="submit" value="Twitch!"></div>');
			  }); 
		},3000);
		
		window.setTimeout(function() {
			if ( $('#twitter-statuses').is(":visible") ) {
				addatwitch();
				addclick();
				$('#clickcounter').hide(); 
				$('#clickcounter').fadeIn(); 
				}
			else {
				subtractatwitch();
				$('#clickcounter').hide(); 
				$('#clickcounter').fadeIn();
				$('#progressmessage').replaceWith('<div id="progressmessage"><p>Either <span class="twittername">Twitter</span> isn\'t talking to us right now, or you\'re looking for something really weird that no-one\'s Tweeting about, <span class="weirdo">weirdo</span>.</p></div>');
				$('#progressmessage').hide();
				$('#progressmessage').fadeIn();
				}
		},5000);
	
		return false;
		}
		
	function prepstatus()
		{
		statusarray.length=0;
		$('#twitter-statuses').empty();
		$('#twitchform input[type="submit"]').removeClass('glow-button');  
		$('#twitter-statuses').hide();
		$('#progressmessage').replaceWith('<div id="progressmessage"><img src="img/progress.gif" alt="Twitching"><p><span id="searchterm">&#8220;'+inputfind+'&#8221;</span> Locating last 10 Tweets&hellip;</p></div>');
		$('#progressmessage').fadeIn();
		getstatus();
		}	
	
	function getstatus()
		{
		  $("#twitter-statuses").tweet({
      modpath: '/twitter/',
			avatar_size: 32,
			count: 10,
			query: "\""+inputfind+"\" -\"RT\"",
			loading_text: ""
		  });
		}
	
	function replacestatus()
		{	
			$('#twitter-statuses').slideDown('slow');
			for ( i=0; i < statusarray.length; i++ )
			{
				//$("a:contains('#')").contents().unwrap();
				$(statusarray[i]).replaceText(inputfindregexp,inputreplace);
				$('.tweet_list li a').replaceText(inputfindregexp,inputreplace);
			}
		}
		 	
	function addatwitch() { 
		 $.ajax({  
		 type: "POST",  
		 data: "",  
		 url: "../php/addatwitch.php",  
		 success: function()  
		 { }
		}); 
        }
		
	function subtractatwitch() {
		clicksonload=parseInt($('#loadingtwitches').text());
		updatedclicks=clicksonload;
		$('#clickcounter').replaceWith('<p id="clickcounter">&#151; <span id="loadingtwitches">'+updatedclicks+'</span> Twitches since March 17, 2011 &#151;</p>');
		}	
	 
      function addclick() {  
		clicksonload=parseInt($('#loadingtwitches').text());
		updatedclicks=clicksonload + 1;
		$('#clickcounter').replaceWith('<p id="clickcounter">Twitch <span id="loadingtwitches">'+updatedclicks+'</span> successfully executed!</p>');
		return false;  
        }  
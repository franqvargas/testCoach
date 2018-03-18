  </header>
</section>
  <script type="text/javascript" src="<?php echo base_url('bootstrap/js/moduloQestions.js'); ?>" >
  </script>
  	
<content id="main-content">
	
		<div class="row" style="height: 1000px; position: absolute;" id="content">
			<div class="col-md-12" style="position: auto;">
				
		<div class="row" style="height: 100px; " id="questionsContainer">			
			<div class="col-md-2" onmouseover="showdiv(event,'Here we will display the question number');" onMouseOut="hiddenDiv()" style="text-align: right;">				
			<p><h3>1)</h3>
			</p>
			</div>
			<div class="col-md-8" onmouseover="showdiv(event,'Here is the qestions title place');" onMouseOut="hiddenDiv()" style="display: table;" id="titleDesc">				
			<p><h1>What is OOP meanning?</h1></p>
				
			</div>
				
			<div class="col-md-2"></div>
			</div>
			<div class="row" style="height: 100px;">
			<div class="col-md-2"></div>
				<div class="col-md-8" id="questionDesc" style="" >
					<p onmouseover="showdiv(event,'Here we will display extra aditional information about this each answer');" onMouseOut="hiddenDiv()" style="display: table;">questionAddicionalInformation</p>
				</div>
			<div class="col-md-2" style=""></div>
		
		</div>
												<div class="row" style=" height:800px;" >
										
									<div class="col-md-8" id="questions">
							<p onmouseover="showdiv(event,'Here we will display the questions module');" onMouseOut="hiddenDiv()">
								
							placeForQestionDescription
							</p>
				</div>
						<div  class="col-md-4" id="answers">						
							<p onmouseover="showdiv(event,'Here we will display the answers options in a list type');" onMouseOut="hiddenDiv()" style="display: table;">
							placeForListAnswers
						</p>
						</div>
			</div>
			<div class="row" style="height: 100px">
				<div class="col-md-12">
					
					<p>Space to Answer</p>
				</div>
			</div>
			</div>
		</div>
				<div id="flotante"></div>
</content>
<footer id="main-footer">
<!--
<div onmouseover="showdiv(event,'Texto descritivo para la primera linea de texto');" onMouseOut="hiddenDiv()" style='display:table;margin-top:30px;'>Por el raton encima para ver la capa</div>
-->
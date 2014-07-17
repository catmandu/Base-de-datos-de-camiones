
window.onload=asignarHorarios;
function asignarHorarios(){
with(document.form1)
 {
	 switch(ruta.value){
	         case '1':
			    switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a,7a,8a,9a,10a,11a,12a';
					fTotal.value=12;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a,4a,5a,6a,7a,8a,9a';
					fTotal.value=9;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
	
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
				}
	         break;
			 
             case '3':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a,7a,8a,9a';
					fTotal.value=9;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a,4a,5a,6a';
					fTotal.value=6;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a';
					mvTotal.value=6;
					break;
				}
			 break;
			 
			 case '4':
			  switch(salida.value)
				{
					case '100%':
					f.value='8a,9a,10a,11a';
					fTotal.value=4;
					mv.value='1a,2a,3a,4a,5a,6a,7a';
					mvTotal.value=14;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a,7a,8a';
					mvTotal.value=16;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
				}
			 break;
			 
			 case '5':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a,7a,8a,9a,10a';
					fTotal.value=10;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a,4a,5a,6a,7a,8a';
					fTotal.value=8;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='-nada-';
					mvTotal.value=10;
					break;
				}
			 break;
			 
			 case '6':
			  switch(salida.value)
				{
					case '100%':
					f.value='2a';
					fTotal.value=1;
					mv.value='4a,6a';
					mvTotal.value=4;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='2a,4a,6a';
					mvTotal.value=6;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='2a,4a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
             case '6A':
			 
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,3a';
					fTotal.value=2;
					mv.value='5a';
					mvTotal.value=2;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,3a,5a';
					mvTotal.value=6;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,3a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '7':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a,7a';
					fTotal.value=7;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a';
					fTotal.value=3;
					mv.value='4a,5a';
					mvTotal.value=4;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '8':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a';
					fTotal.value=3;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a';
					mvTotal.value=2;
					break;
				}
			 break;
			 
			 case '9':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a';
					fTotal.value=6;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a,4a,5a';
					fTotal.value=5;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a';
					mvTotal.value=6;
					break;
				}
			 break;
			 
			 case '9A':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a';
					fTotal.value=2;
					mv.value='3a,4a,5a,6a,7a,8a,9a,10a';
					mvTotal.value=16;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a,7a,8a';
					mvTotal.value=16;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a';
					mvTotal.value=10;
					break;
				}
			 break;
			 
			 case '10':
			  switch(salida.value)
				{
					case '100%':
					f.value='5a,6a,7a,8a,9a';
					fTotal.value=5;
					mv.value='1a,2a,3a,4a';
					mvTotal.value=8;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a';
					mvTotal.value=6;
					break;
				}
			 break;
			 
			 case '11':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a';
					fTotal.value=5;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='-nada-';//3a,4a
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=6; //revisar aqui, deben de ser 4
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '13':
			  switch(salida.value)
				{
					case '100%':
					f.value='2a,4a,6a,8a';
					fTotal.value=4;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='2a,4a,6a';
					fTotal.value=3;
					mv.value='8a';
					mvTotal.value=2;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='';//revisar tabla
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '13A':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,3a,5a,7a';
					fTotal.value=4;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,3a,5a';
					fTotal.value=3;
					mv.value='7a';
					mvTotal.value=2;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='-nada-';//revisar tabla
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '14':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a';
					fTotal.value=5;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a';
					fTotal.value=1;
					mv.value='2a,3a';
					mvTotal.value=4;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
				}
			 break;

			 case '17':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a,7a';
					fTotal.value=7;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='';//revisar tabla
					fTotal.value=3;
					mv.value='1a,2a,3a,4a,5a';//revisar tabla
					mvTotal.value=4;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '19':
			  switch(salida.value)
				{
					case '100%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a';//revisar tabla
					mvTotal.value=4;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a';
					mvTotal.value=2;
					break;
				}
			 break;
			 
			 case '20':
			  switch(salida.value)
				{
					case '100%':
					f.value='5a,6a,7a,8a,9a,10a,11a,12a,13a,14a';
					fTotal.value=10;
					mv.value='1a,2a,3a,4a';
					mvTotal.value=8;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a,7a,8a,9a';
					mvTotal.value=18;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
				}
			 break;
			 
			 case '21':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a';
					fTotal.value=6;
					mv.value='7a,8a,9a,10a,11a,12a';
					mvTotal.value=12;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a,7a,8a,9a';
					mvTotal.value=18;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
				}
			 break;
			 
			 case '22': switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a';
					fTotal.value=6;
					mv.value='7a,8a,9a,10a,11a,12a';
					mvTotal.value=12;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a,7a,8a,9a';
					mvTotal.value=18;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a,5a,6a';
					mvTotal.value=12;
					break;
				}
			 break;
			 
			 case '24':
			  switch(salida.value)
				{
					case '100%':
					f.value='8a,10a,12a';
					fTotal.value=3;
					mv.value='2a,4a,6a';
					mvTotal.value=6;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='2a,4a,6a,8a';
					mvTotal.value=9;//revisar tabla
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='2a,4a,6a';
					mvTotal.value=6;
					break;
				}
			 case '24A':
			  switch(salida.value)
				{
					case '100%':
					f.value='7a,9a,11a';
					fTotal.value=3;
					mv.value='1a,3a,5a';
					mvTotal.value=6;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,3a,5a,7a';
					mvTotal.value=9;//revisar tabla
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,3a,5a';
					mvTotal.value=6;
					break;
				}
			 break;
			 
			 case '27':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a';
					fTotal.value=5;
					mv.value='';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a,3a,4a';
					fTotal.value=4;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=4;
					break;
				}
			 break;
			 
			 case '27A':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a';
					fTotal.value=5;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a,4a';
					mvTotal.value=8;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
				}
			 break;
			 
			 case '28':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a,3a,4a,5a,6a';
					fTotal.value=6;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='5a';
					fTotal.value=1;
					mv.value='1a,2a,3a,4a';
					mvTotal.value=8;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a,3a';
					mvTotal.value=6;
					break;
				}
			 break;
			 
			 case '29':
			  switch(salida.value)
				{
					case '100%':
					f.value='1a,2a';
					fTotal.value=2;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '80%':
					f.value='1a,2a';
					fTotal.value=2;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a';
					mvTotal.value=2;
					break;
				}
			 break;
			 
			 case 'CA-ISAC':
			  switch(salida.value)
				{
					case '100%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a,2a';
					mvTotal.value=2;
					break;
					
					case '80%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='1a';
					mvTotal.value=2;
					break;
					
					case '50%':
					f.value='-nada-';
					fTotal.value=0;
					mv.value='-nada-';
					mvTotal.value=0;
					break;
				}
			 break;
	 }
	 
 }
}
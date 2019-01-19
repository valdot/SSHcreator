<? php
tidur ( 1 );
sistem ( " jelas " );
$ banner  =  " \ e [36; 1m                                                                                 
                                                                                 
           # ######   
           # #             
  ###### # # ########### 
           # # # # 
           ####### ##  
########## # ##    
                # ##      
                              
                                                                                 
[#] Otomatis Buat Akun SSH [#]    
                                   
Dikodekan oleh: Revan AR                  
Tim: IndoSec                   
Github: https // github.com / revan-ar / \ n \ n \ e [0; 1m " ;
tidur ( 3 );
echo  $ banner ;
tidur ( 2 );
echo  " [+] SERVER DAFTAR [+] \ n \ n " ;
echo  " 1. SG-1 \ n 2. SG-2 \ n 3. SG-3 \ n \ n " ;
tidur ( 2 );
echo  " [-] pilih server: " ;
$ ser  =  trim ( fgets ( STDIN ));
if ( $ ser  ==  1 ) {
	$ server  =  " 2090 " ;
	} lain  jika ( $ ser  ==  2 ) {
		$ server  =  " 2100 " ;
		} lain  jika ( $ ser  ==  3 ) {
			$ server  =  " 2110 " ;
			}
		if ( ! empty ( $ server )) {
$ user  =  array ( " revan " , " indosec " , " minicode " );
$ acak  =  str_shuffle ( " 1234 " );
	
	$ ch  =  curl_init ();
		curl_setopt ( $ ch , CURLOPT_URL , " http://www.jetssh.com/create-ssh-server-3-days/2090/ssh-server-singapore-1 " );
		curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
		curl_setopt ( $ ch , CURLOPT_HEADER , 1 );
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , array ( " Cookie: _ga = GA1.2.542438985.1547885486; _gid = GA1.2.235482691.1547885486; HstCfa3660500 = 1547885590690650650650650850890890 ... 1; HstCns3660500 = 1; c_ref_3660500 = http% 3A% 2F% 2Fjetssh.com% 2Fssh-server-sg; create = 1; _gat_gtag_UA_127762168_1 = 1 " ));
	$ gas  =  curl_exec ( $ ch );
		curl_close ( $ ch );
		preg_match ( ' | Set-Cookie: (. +) path = | ' , $ gas , $ cookie );
	$ cr  =  curl_init ();
		curl_setopt ( $ cr , CURLOPT_URL , " http://www.jetssh.com/create-account-ssh-3-days.php " );
		curl_setopt ( $ cr , CURLOPT_RETURNTRANSFER , 1 );
		curl_setopt ( $ cr , CURLOPT_HEADER , 1 );
		curl_setopt ( $ cr , CURLOPT_HTTPHEADER , array ( " Tipe-Konten: application / x-www-form-urlencoded; charset = UTF-8 " , " X-Diminta-Dengan: XMLHttpRequest " , " Referer: http: // www. jetssh.com/create-ssh-server-3-days/2090/ssh-server-singapore-1 " , " Cookie: _ga = GA1.2.542438985.1547885486; _gid = GA1.2.235482691.1547885486; $ cookie [ 1] HstCfa3660500 = 1547885532365; HstCla3660500 = 1547887145135; HstCmu3660500 = 1547885532365; HstPn3660500 = 7; HstPt3660500 = 7; HstCnv3660500 = 1; HstCns3660500 = 1; c_ref_3660500 = http% 3A% 2F% 2Fjetssh.com% 2Fssh-server-sg; buat = 1 " ));
		curl_setopt ( $ cr , CURLOPT_POST , 1 );
		curl_setopt ( $ cr , CURLOPT_POSTFIELDS , " serverid = " . $ server . " & username = " . $ user [ rand ( 0 , 2 )] . $ acak . " & password = 123 " );
	$ h  =  curl_exec ( $ cr );
		curl_close ( $ cr );
		
		$ d  =  date ( ' d ' );
		$ date  =  $ d  +  7 ;
		preg_match_all ( "/ <br> (. * ?) <br> / ix" , $ h , $ ex );
if ( ! kosong ( $ ex [ 1 ] [ 2 ])) {
		echo  " \ n SUKSES !! \ n \ n Host IP: sg " . $ ser . " .jetssh.com \ n " . $ ex [ 1 ] [ 1 ] . " \ n Kata Sandi: 123 \ n " . $ ex [ 1 ] [ 2 ] . " \ n " ;
		gema  " Kedaluwarsa: " . $ date . " - " . tanggal ( ' Fy ' ) . " \ n \ n " ;
		} lain {
			echo  " GAGAL !! \ n Harap Tunggu 1 menit Untuk Membuat Akun Lagi \ n " ;
			
			}
		
		} lain {
				gema  " SERVER " . $ ser . " TIDAK ADA \ n " ;
				}

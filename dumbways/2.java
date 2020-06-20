/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package login;
import java.util.regex.*;
/**
 *
 * @author toshiba
 */
public class GFG {
    // Function to validate the password. 
	public static boolean
	isValidPassword(String password) 
	{ 
		// Regular expression buat ngecheck valid password. 
		String regex = "^(?=.*[0-9])"   // ngecek angka
					+ "(?=.*[a-z])(?=.*[A-Z])" //ngecek upper lowercase
					+ "(?=.*[@#$%^&+=])" // ngecek special karakter
					+ "(?=\\S+$).{8,20}$";  // ngecek length pw
		Pattern p = Pattern.compile(regex); 
		// jika password kosong return false
		if (password == null) { 
			return false; 
		} 
		Matcher m = p.matcher(password);  
		return m.matches(); 
	} 
	public static void main(String args[]) 
	{ 

		// Test Case 1: return true karena ada uppercase,lowercase, lebih dari 8, angka, karakter special
		String str1 = "Noob@uhuyuhuyl20"; 
		System.out.println(isValidPassword(str1)); 

		// Test Case 2: return false karena tidak ada angka, spcial krakter
		String str2 = "Noobsmarksman";  
		System.out.println(isValidPassword(str2)); 

		// Test Case 3: return false karena spasi bukan bagian special karakter
		String str3 = "Noobs@ uhuyuhuyl9"; 
		System.out.println(isValidPassword(str3)); 

		// Test Case 4: return false karena hanya angka
		String str4 = "1234"; 
		System.out.println(isValidPassword(str4)); 

		// Test Case 5: return false karakter kurang dr 8
		String str5 = "Nob@90"; 
		System.out.println(isValidPassword(str5)); 

		// Test Case 6: return false karna tanpa upercase 
		String str6 = "noob@fightersl20"; 
		System.out.println(isValidPassword(str6)); 
	} 
} 

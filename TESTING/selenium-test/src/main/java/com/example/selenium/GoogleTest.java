package com.example.selenium;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import io.github.bonigarcia.wdm.WebDriverManager;

public class GoogleTest {
    public static void main(String[] args) {

        // Setup ChromeDriver automatically using WebDriverManager
        WebDriverManager.chromedriver().setup();

        // Launch Chrome
        WebDriver driver = new ChromeDriver();

        // Open URL
        driver.get("https://www.google.com");
      
        // Click example (clicking on 'Gmail' link)
        driver.findElement(By.linkText("Gmail")).click();
        driver.navigate().refresh();

        driver.findElement(By.linkText("Sign in")).click();
        
        String currentURL = driver.getCurrentUrl();
        System.out.println("URL is: " + currentURL);
        String pageTitle = driver.getTitle();
        System.out.println("Page Title is: " + pageTitle);


        
        String myEmail = "aadarshckumar@gmail.com";
        String myPass = "COOLdude@@@@9065877668";
//        driver.findElement(By.LinkText(""));

        // Close browser
        driver.quit();
    }
}

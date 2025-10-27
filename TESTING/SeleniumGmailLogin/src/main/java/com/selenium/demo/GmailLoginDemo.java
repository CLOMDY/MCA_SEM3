package com.selenium.demo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import io.github.bonigarcia.wdm.WebDriverManager;

public class GmailLoginDemo {
    public static void main(String[] args) throws InterruptedException {

        WebDriverManager.chromedriver().setup();

        WebDriver driver = new ChromeDriver();
        driver.manage().window().maximize();

        driver.get("https://mail.google.com/");

        WebElement email = driver.findElement(By.id("identifierId"));
        email.sendKeys("cooldduderoxxxs@gmail.com");
        driver.findElement(By.id("identifierNext")).click();

        Thread.sleep(3000);

        WebElement password = driver.findElement(By.name("Passwd"));
        password.sendKeys("COOL DUDE 9065877668");
        driver.findElement(By.id("passwordNext")).click();

        Thread.sleep(5000);
        System.out.println("Login attempted!");

        driver.quit();
    }
}

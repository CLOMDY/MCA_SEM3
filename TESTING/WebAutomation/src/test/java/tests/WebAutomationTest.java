package tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import io.github.bonigarcia.wdm.WebDriverManager;
import org.testng.Assert;
import org.testng.annotations.*;

public class WebAutomationTest {

    WebDriver driver;

    @BeforeClass
    public void setup() {
        WebDriverManager.chromedriver().setup();
        driver = new ChromeDriver();
        driver.manage().window().maximize();
    }

    @Test(priority = 1)
    public void verifyHomePageTitle() {
        driver.get("https://www.selenium.dev/");
        Assert.assertTrue(driver.getTitle().contains("Selenium"),
                "Title does not match!");
    }

    @Test(priority = 2)
    public void performSearch() throws InterruptedException {
        driver.get("https://www.selenium.dev/");

        driver.findElement(By.cssSelector("button[aria-label='Search']")).click();
        driver.findElement(By.cssSelector("input[type='search']")).sendKeys("WebDriver");

        Thread.sleep(2000);

        WebElement result = driver.findElement(By.className("search-result"));
        Assert.assertTrue(result.isDisplayed(), "Search result not displayed!");
    }

    @Test(priority = 3)
    public void validateFormSubmission() throws InterruptedException {
        driver.get("https://www.selenium.dev/selenium/web/web-form.html");

        driver.findElement(By.name("my-text")).sendKeys("Hello Selenium!");
        driver.findElement(By.name("my-select")).click();
        driver.findElement(By.cssSelector("option[value='2']")).click();
        driver.findElement(By.id("my-check-1")).click();
        driver.findElement(By.cssSelector("button")).click();

        Thread.sleep(2000);

        Assert.assertTrue(
                driver.findElement(By.id("message")).getText().contains("Received"),
                "Form submission failed!");
    }

    @AfterClass
    public void tearDown() {
        driver.quit();
    }
}

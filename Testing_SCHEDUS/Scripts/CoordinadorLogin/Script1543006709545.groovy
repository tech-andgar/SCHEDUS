import static com.kms.katalon.core.checkpoint.CheckpointFactory.findCheckpoint
import static com.kms.katalon.core.testcase.TestCaseFactory.findTestCase
import static com.kms.katalon.core.testdata.TestDataFactory.findTestData
import static com.kms.katalon.core.testobject.ObjectRepository.findTestObject
import com.kms.katalon.core.checkpoint.Checkpoint as Checkpoint
import com.kms.katalon.core.cucumber.keyword.CucumberBuiltinKeywords as CucumberKW
import com.kms.katalon.core.mobile.keyword.MobileBuiltInKeywords as Mobile
import com.kms.katalon.core.model.FailureHandling as FailureHandling
import com.kms.katalon.core.testcase.TestCase as TestCase
import com.kms.katalon.core.testdata.TestData as TestData
import com.kms.katalon.core.testobject.TestObject as TestObject
import com.kms.katalon.core.webservice.keyword.WSBuiltInKeywords as WS
import com.kms.katalon.core.webui.keyword.WebUiBuiltInKeywords as WebUI
import internal.GlobalVariable as GlobalVariable

WebUI.openBrowser('')

WebUI.navigateToUrl('http://localhost/SCHEDUS/')

WebUI.click(findTestObject('Object Repository/Page_Horario de formacin/a_Login'))

WebUI.setText(findTestObject('Object Repository/Page_Horario de formacin/input_Documento_dni'), '1231')

WebUI.setEncryptedText(findTestObject('Object Repository/Page_Horario de formacin/input_Contrasea_password'), 'aeHFOx8jV/A=')

WebUI.click(findTestObject('Inicio/button_Login'))

not_run: WebUI.sendKeys(findTestObject('Object Repository/Page_Horario de formacin/input_Contrasea_password'), Keys.chord(
        Keys.ENTER))

not_run: WebUI.click(findTestObject('Object Repository/Page_Aprobar/h2_BIENVENIDO COORDINADOR'))

not_run: WebUI.click(findTestObject('Object Repository/Page_Aprobar/a_Coordinador'))


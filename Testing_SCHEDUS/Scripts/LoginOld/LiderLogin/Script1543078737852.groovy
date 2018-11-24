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

WebUI.click(findTestObject('Inicio/Login/a_Login'))

WebUI.setText(findTestObject('Inicio/Login/input_Documento_dni'), '1232')

WebUI.setEncryptedText(findTestObject('Inicio/Login/input_Contrasea_password'), 'Tscr9DIxB28=')

WebUI.click(findTestObject('Inicio/Login/button_Login'))

WebUI.verifyElementText(findTestObject('Dashboard/MainModule/Lider/h2_BIENVENIDO LIDER'), 'BIENVENIDO LIDER')

WebUI.verifyElementText(findTestObject('Dashboard/BreadcrumbsModule/Lider/a_Lider'), 'Lider')

WebUI.delay(2)

WebUI.click(findTestObject('Dashboard/HeaderModule/a_menuUsuario'))

WebUI.click(findTestObject('Dashboard/HeaderModule/a_CerrarSesion'))

WebUI.verifyElementText(findTestObject('Inicio/h2_HORARIO DE FORMACION E INFO'), 'HORARIO DE FORMACION E INFORMACION PARA APRENDICES CEET')

WebUI.delay(2)

WebUI.closeBrowser()


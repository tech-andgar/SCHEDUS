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
import org.openqa.selenium.Keys as Keys

not_run: WebUI.click(findTestObject('Dashboard/Sidebar/Lider/04-Formacion/a_MenuFormacion'))

not_run: WebUI.click(findTestObject('Dashboard/Sidebar/Lider/04-Formacion/SubModule/a_MenuPrograma'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/li_Administrar programas de fo'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/div_Administrar Programas de F'))

WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/button_Nuevo'))

WebUI.setText(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/input_Escriba Codigo del Progr'), 
    cod_programa)

WebUI.setText(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/input_Escriba las Sigals del P'), 
    'TPS')

WebUI.setText(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/input_Escriba Programa de Form'), 
    name_programa)

WebUI.setText(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/input_Escriba Version de Forma'), 
    'V0.12')

WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/span_Selecciona Nivel de Forma'))

WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/span_Escriba Nombre del Proyec'))

WebUI.delay(15)

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/button_Agregar nuevo proyecto'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/button_Nuevo'))

WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/button_Agregar'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/span_Activo'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/span_Activo'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/i_Activo_far fa-edit fa-lg'))

not_run: WebUI.click(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/button_'))

not_run: WebUI.setText(findTestObject('Dashboard/MainModule/Lider/04-Formacion/04.01-ProgramaFormacion/input_Buscar_form-control form'), 
    '')


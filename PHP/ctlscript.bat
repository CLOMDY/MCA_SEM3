@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\coold\VSCODE\SEM 3\PHP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\ingres\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\mysql\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\postgresql\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\apache\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\apache\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\openoffice\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\resin\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\resin\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\jetty\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\coold\VSCODE\SEM 3\PHP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\lucene\scripts\ctl.bat START)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\coold\VSCODE\SEM 3\PHP\third_application\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\third_application\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\lucene\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\coold\VSCODE\SEM 3\PHP\subversion\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\subversion\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\jetty\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\jetty\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\resin\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\resin\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\coold\VSCODE\SEM 3\PHP\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\apache\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\apache\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\ingres\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\ingres\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\mysql\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\mysql\scripts\ctl.bat STOP)
if exist C:\Users\coold\VSCODE\SEM 3\PHP\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\coold\VSCODE\SEM 3\PHP\postgresql\scripts\ctl.bat STOP)

:end


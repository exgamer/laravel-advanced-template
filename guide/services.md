#Сервисы

Порядок действителен в рамках подпроекта (common, frontend, backend, api)

Пример создания сервиса в подпроекте common 
на примере CommonServiceProvider и ExampleService

1 Создать сервис провайдер CommonServiceProvider
2 Зарегестрировать его в common/bootstrap/main.php
3 Создать файл конфигурации для регистрации сервисов  common/config/services/common.php
4 В сервис провайдере указать имя файла конфига в свойстве $servicesGroup
5 Создать сервис ExampleService
6 Зарегестрировать сервис в конфиге common/config/services/common.php
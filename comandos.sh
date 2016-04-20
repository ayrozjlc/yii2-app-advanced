#! /bin/bash
# Script migrations

./yii migrate/create create_cliente --useTablePrefix --fields="nombre_cliente:string(50):notNull,telefono_contacto:string(15):notNull,borrado:integer(1):notNull:defaultValue(0),fecha_alta:dateTime,fecha_actualizacion:dateTime" --interactive=0;

./yii migrate/create create_proyecto --useTablePrefix --fields="cliente:integer:notNull:foreignKey(cliente),nombre_proyecto:string(50):notNull,borrado:integer(1):notNull:defaultValue(0),fecha_alta:dateTime,fecha_actualizacion:dateTime" --interactive=0;

./yii migrate/create create_incidencia --useTablePrefix --fields="solicitante:integer:notNull:foreignKey(usuario),proyecto:integer:notNull:foreignKey(proyecto),descripcion:string(255),fecha_entrega:dateTime,borrado:integer(1):notNull:defaultValue(0),fecha_alta:dateTime,fecha_actualizacion:dateTime" --interactive=0;

./yii migrate/create create_incidencia_observacion --useTablePrefix --fields="incidencia:integer:notNull:foreignKey(incidencia),responsable:integer:notNull:foreignKey(usuario),observacion:string(255),prioridad:string(8),etapa:string(8),borrado:integer(1):notNull:defaultValue(0),fecha_alta:dateTime,fecha_actualizacion:dateTime" --interactive=0;

./yii migrate/create create_incidencia_imagen --useTablePrefix --fields="incidencia:integer:notNull:foreignKey(incidencia),usuario:integer:notNull:foreignKey(usuario),archivo:string(32),borrado:integer(1):notNull:defaultValue(0),fecha_alta:dateTime,fecha_actualizacion:dateTime" --interactive=0;
./yii migrate 7 --interactive=0;


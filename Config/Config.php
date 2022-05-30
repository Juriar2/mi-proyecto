<?php 
	
	const BASE_URL = "https://localhost/ecommerce";

	//Zona horaria
	date_default_timezone_set('America/Mexico_City');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "db_tiendavirtual";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$ MXN ";
	const CURRENCY = "MXN";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AfJb7MSIscGuRVDuOvRa3B9WAw8CAdKX_T0AjLjtKUiWf8p3Av15AraVvAzWrRU1V7dgoEYjxEPoOR68";
	const SECRET = "EHEVHTxnyWG-Z0IainZ0le_nqvcsLgSweBAQy3e4EKTxpppAFmp9zuu6I377w6FaOJwCEocSmTL7OvCa";
	//LIVE PAYPAL
	//const IDCLIENTE = "AWBtVubwv1loCQFkpbwVdxw3GN9v4wj8ieLQPCpm8i8v0iwHSO_wc1_fWPNqldrcrPh1RqQ1bIcZPKWD";
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const SECRET = "ELCYtuxTFft8kEuAhcg8jE7_Bi31BnMd8E4DilpsnnsgXnZRUA8AKiXHwOVSPVu7xFIDZYw_6AjXulyC";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Verticher S.A. de C.V";
	const EMAIL_REMITENTE = "no-reply@Verticher S.A. de C.V";
	const NOMBRE_EMPESA = "Verticher S.A. de C.V.";
	const WEB_EMPRESA = "Verticher.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos computo de alta calidad.";
	const SHAREDHASH = "Verticher";

	//Datos Empresa
	const DIRECCION = " Verticher S.A. de C.V Teapa tabasco";
	const TELEMPRESA = "+(52)9321137432";
	const WHATSAPP = "+9321137432";
	const EMAIL_EMPRESA = "yuriar2000@hotmail.com";
	const EMAIL_PEDIDOS = "yuriar1234567890@hotmail.com"; 
	const EMAIL_SUSCRIPCION = "yuriar200@hotmail.com";
	const EMAIL_CONTACTO = "Verticher.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'JURIAR';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 20;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 6;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "";
	const INSTAGRAM = "";
	

 ?>
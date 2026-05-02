# Instrumentación y Control de México

<div align="center">

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.1-7952B3?logo=bootstrap&logoColor=white)
![SCSS](https://img.shields.io/badge/SCSS-Stylesheets-CC6699?logo=sass&logoColor=white)
![Status](https://img.shields.io/badge/Status-Production-brightgreen)
![License](https://img.shields.io/badge/License-MIT-yellow.svg)

**Sitio web corporativo profesional para empresa de ingeniería, instrumentación y control industrial.**

🌐 **En producción:** [https://instrumentacionycontrol.mx](https://instrumentacionycontrol.mx)

</div>

---

## 📋 Descripción

Este repositorio contiene el código fuente del sitio web oficial de **Instrumentación y Control de México**, empresa con más de 20 años de experiencia brindando soluciones técnicas integrales en ingeniería, procuración, construcción, instrumentación industrial y analítica, así como capacitación especializada. El sitio fue desarrollado con un enfoque en rendimiento, diseño responsive y experiencia de usuario profesional.

---

## 🚀 Características Principales

| Característica | Descripción |
|--------|-------------|
| **🏠 Página de Inicio** | Carrusel principal con Swiper.js mostrando los 6 pilares de servicio de la empresa con imágenes optimizadas en formato WebP. |
| **🔧 Sección de Servicios** | Grid visual interactivo con hover effects que redirige a cada especialidad: Ingeniería, Procuración, Construcción, Instrumentación Industrial, Instrumentación Analítica y Capacitación. |
| **📞 Formulario de Contacto** | Formulario funcional con validación que envía correos electrónicos mediante PHPMailer con diseño HTML profesional. |
| **📱 Diseño Responsive** | Adaptación completa a dispositivos móviles, tablets y escritorio con menú hamburguesa animado y layouts flexibles. |
| **🎨 Estilos SCSS Personalizados** | Sistema de diseño propio con variables CSS, animaciones de entrada, transiciones suaves y paleta de colores corporativa. |
| **⚡ Optimización WebP** | Imágenes del carrusel y servicios en formato WebP para carga rápida y mejor SEO. |
| **🔍 SEO Básico** | Meta tags de descripción, keywords, viewport y theme color configurados en todas las páginas. |
| **🦶 Footer Corporativo** | Información de contacto completa, enlaces a redes sociales (Facebook, LinkedIn, WhatsApp) y datos de ubicación. |

---

## 📂 Estructura del Proyecto

```
instrumental/
├── index.php                    # Página de inicio con carrusel y descripción
├── assets/
│   ├── bootstrap/css/           # Bootstrap 5 estilos
│   ├── css/main.css             # Hojas de estilo compiladas (SCSS)
│   ├── estilos.scss             # Fuente SCSS principal
│   └── img/                     # Imágenes corporativas y de servicios (WebP)
│       ├── carrusel/
│       ├── servicios/
│       └── sistema_de_gestion_*
├── servicios/
│   └── index.php                # Página de servicios con grid visual
├── ingenieria/
│   └── index.php                # Detalle de servicio: Ingeniería
├── procuracion/
│   └── index.php                # Detalle de servicio: Procuración
├── construccion/
│   └── index.php                # Detalle de servicio: Construcción
├── industrial/
│   └── index.php                # Detalle de servicio: Instrumentación Industrial
├── analitica/
│   └── index.php                # Detalle de servicio: Instrumentación Analítica
├── capacitacion/
│   └── index.php                # Detalle de servicio: Capacitación
├── contacto/
│   ├── index.php                # Página de contacto con formulario
│   └── sendmail.php             # Backend de envío de correos (PHPMailer)
├── templates/
│   ├── navbar.php               # Barra de navegación responsive
│   ├── footer.php               # Pie de página corporativo
│   ├── banner.php               # Componente de banner reutilizable
│   └── mailbody.php             # Plantilla HTML para emails de contacto
├── package.json                 # Dependencias npm (Bootstrap)
└── README.md
```

---

## 🛠️ Stack Tecnológico

| Tecnología | Uso |
|------------|-----|
| **PHP** | Backend para procesamiento de formulario de contacto y envío de emails |
| **Bootstrap 5** | Framework CSS para grid system, componentes y responsive design |
| **SCSS** | Preprocesador CSS para estilos modulares, variables y mixins |
| **Swiper.js** | Carrusel táctil y responsive en la página de inicio |
| **PHPMailer** | Envío de correos electrónicos con autenticación SMTP |
| **JavaScript Vanilla** | Interacciones del menú hamburguesa, animaciones y navegación |

---

## 📦 Instalación y Despliegue

### Requisitos Previos

- Servidor web con soporte para PHP 7.4+
- Composer (opcional, para gestionar PHPMailer)
- Node.js y npm (para compilar SCSS si se modifica)

### Pasos

```bash
# 1. Clonar el repositorio
git clone https://github.com/ebravo-dev/instrumental.git
cd instrumental

# 2. Instalar dependencias de Bootstrap (ya incluidas en assets/)
npm install

# 3. Configurar PHPMailer
# Edita contacto/sendmail.php y actualiza las credenciales SMTP:
# - Host SMTP
# - Usuario y contraseña
# - Correo destinatario

# 4. Desplegar en servidor web
# Copia los archivos al directorio público de tu servidor (htdocs, public_html, etc.)

# 5. Compilar SCSS (si realizas cambios en estilos)
# sass assets/estilos.scss assets/css/main.css
```

---

## 🏢 Sobre la Empresa

**Instrumentación y Control de México** emerge en 1999 como una solución técnica para el suministro de servicios costo-efectivos sobre una línea de trabajo multidisciplinar en los diferentes niveles de ejecución de proyecto y mantenimiento, presentando un solo proveedor en la cadena de suministro de servicios.

### Servicios Ofrecidos

| Servicio | Descripción |
|----------|-------------|
| **Ingeniería** | Diseño, consultoría y supervisión de proyectos de instrumentación y control. |
| **Procuración** | Suministro de equipos, materiales y refacciones para la industria. |
| **Construcción** | Automatización y optimización de procesos industriales. |
| **Instrumentación Industrial** | Instalación, calibración y mantenimiento de equipos de medición y control. |
| **Instrumentación Analítica** | Soluciones para análisis de procesos y control de calidad. |
| **Capacitación** | Entrenamiento especializado para ingenieros y técnicos. |

---

## 📞 Contacto

- **Dirección:** Central Park, Av. Armando Birlain Shaffler No. 2001, Edificio Corporativo II Piso 14, Centro Sur C.P. 76090, Santiago de Querétaro, Querétaro, México
- **Teléfono:** [(442) 708 6211](tel:4427086211)
- **Email:** [contacto@instrumentacionycontrol.mx](mailto:contacto@instrumentacionycontrol.mx)
- **WhatsApp:** [Enviar mensaje](https://wa.link/wpcp2r)
- **Facebook:** [Instrumentación y Control de México](https://www.facebook.com/Instrumentaci%C3%B3n-y-Control-de-M%C3%A9xico-109187491557390)

---

## 🤝 Contribución

Este es un proyecto de código cerrado para uso exclusivo de Instrumentación y Control de México. Para solicitudes de modificación o mejoras, contactar al desarrollador.

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Consulta el archivo [`LICENSE`](LICENSE) para más detalles.

---

<div align="center">

**Instrumentación y Control de México 2021 | By [Nextiart](https://www.facebook.com/Nextiart-316612351829354/)**

</div>

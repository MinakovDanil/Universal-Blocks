# Universal Blocks
**Universal Blocks** are designed to speed up the process of creating a new website by using pre-made elements and components that can be adapted for various projects.  
This repository is a WordPress theme that includes a set of such blocks, which can be easily integrated into any new project, significantly reducing development time.


## How to View the Blocks
1. **File Installation:**  
Copy the files from the repository and upload them to the directory of an empty WordPress theme.

2. **Install Carbon Fields:**  
Download the [Carbon Fields](https://carbonfields.net/release-archive/). plugin and install it in the WordPress admin panel using any available method (e.g., by uploading the ZIP file).

3. **Set Up the Home Page:**  
Create a new page and select it as a static home page in the Reading settings.

4. **Content Filling:**  
Go to the WordPress admin panel, open the created home page, and fill in the fields with content.
You can use content examples from the site [vtslogistics.net](https://vtslogistics.net).


## How to use the blocks
1. **Install Carbon Fields:**  
First, install the Carbon Fields plugin.  
Alternatively, if you prefer to use a different custom fields plugin (such as ACF), you will need to modify the data output. For example, replace <code>carbon_get_post_meta()</code> with <code>get_field()</code> if you are using ACF.

2. **Block Structure:**  

* **Markup:** All block markup is stored in <code>front-page.php</code>.  
* **Styles:** Located in <code>/assets/css/universal.css</code> and <code>/assets/css/universal-responsive.css</code>.  
* **Scripts:** Stored in <code>/assets/js/universal.js</code>.  


3. **Customization:**  
Simply copy the markup, styles, and scripts of the desired block. Modify the styles or markup as needed to fit your design requirements.


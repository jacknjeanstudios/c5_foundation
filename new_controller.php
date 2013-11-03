<?php 

defined('C5_EXECUTE') or die(_("Access Denied."));

class Theme***ThemeName***Package extends Package {

  protected $pkgHandle = '***theme_name***';
  protected $appVersionRequired = '5.6.2.1';
  protected $pkgVersion = '0.1.0';

  public function getPackageDescription() {
    return t("Installs ***Theme Name*** by RJ Lewis");
  }

  public function getPackageName() {
    return t("***Theme Name***Theme");
  }
  //uncomment sections to add functionality to the controller
  public function install() {
    $pkg = parent::install();

    // install theme block
      PageTheme::add('***theme_handle***', $pkg); 
    
    // install Page Types
      Loader::model('collection_types');

      // $ct = CollectionType::getByHandle('complex');
      //   if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
      //   $data['ctHandle'] = 'complex';
      //   $data['ctName'] = t('Complex');
      //   $hpt = CollectionType::add($data, $pkg);
      //   }
      // $ct = CollectionType::getByHandle('full');
      //   if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
      //   $data['ctHandle'] = 'full';
      //   $data['ctName'] = t('Full');
      //   $hpt = CollectionType::add($data, $pkg);
      //   }
      // $ct = CollectionType::getByHandle('left_sidebar');
      //   if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
      //   $data['ctHandle'] = 'left_sidebar';
      //   $data['ctName'] = t('Left Sidebar');
      //   $hpt = CollectionType::add($data, $pkg);
      //   }
      // $ct = CollectionType::getByHandle('left_sidebar_on_top');
      //   if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
      //   $data['ctHandle'] = 'left_sidebar_on_top';
      //   $data['ctName'] = t('Left Sidebar on Top');
      //   $hpt = CollectionType::add($data, $pkg);
      //   }

      //at the very least pkg should have right sidebar type
      $ct = CollectionType::getByHandle('right_sidebar'); 
        if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
        $data['ctHandle'] = 'right_sidebar';
        $data['ctName'] = t('Right Sidebar');
        $hpt = CollectionType::add($data, $pkg);
        }
      // $ct = CollectionType::getByHandle('right_sidebar_on_top');
      //   if((!is_object($ct)) || ($ct->getCollectionTypeID() < 1)) {
      //   $data['ctHandle'] = 'right_sidebar_on_top';
      //   $data['ctName'] = t('Right Sidebar on Top');
      //   $hpt = CollectionType::add($data, $pkg);
      //   }
    
    // add an attribute set
      // Loader::model('attribute/categories/collection');  

        // $eaku = AttributeKeyCategory::getByHandle('collection');
        // $eaku->setAllowAttributeSets(AttributeKeyCategory::ASET_ALLOW_SINGLE);
        // $blogpostSet = $eaku->addSet('blog_post',t('Blog Post'),$pkg);

    // load attribute types
      // $bool = AttributeType::getByHandle('boolean'); //checkbox
      // $txt = AttributeType::getByHandle('text'); //text box

    // check for and install blog page attributes if they have not been created
      // if(!is_object(CollectionAttributeKey::getByHandle('is_featured'))){
      //     CollectionAttributeKey::add($bool,array('akHandle'=>'is_featured','akName'=>t('Is Featured'),'akIsSearchable'=>true,'akCheckedByDefault'=>false),$pkg)->setAttributeSet($blogpostSet);
      // }

    //import social media icons
    // Loader::library('file/importer');
    //   $fi = new FileImporter();
    //   $fh = Loader::helper('file');

    // $iconPath = 'packages/theme_romance/themes/romance/images/social-media-icons/';
    // $files = $fh->getDirectoryContents($iconPath);

    // foreach ($files as $file) {
    //   $newFile = $fi->import($iconPath.$file);
    // }

    //import theme header image
    //   $pathToFile = 'packages/theme_romance/themes/romance/images/roses.jpg';
    //   $nameOfFile = 'roses.jpg';
    //     $newFile = $fi->import($pathToFile, $nameOfFile);

    //import custom block(s)
      // BlockType::installBlockTypeFromPackage('**block_handle**', $pkg);
      // Update any existing installation
        // public function upgrade() {
        //   parent::upgrade();
         
        //   // add another block type
        //   $bt = BlockType::getByHandle('top_content_img_shadow');
        //   if (!is_object($bt)) {
        //     BlockType::installBlockTypeFromPackage('top_content_img_shadow', $this); 
        //   }
        // }
  }
}
?>
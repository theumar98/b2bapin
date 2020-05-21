<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();


            $table->boolean('alvarezRoyalty_c');
            $table->boolean('buyToOrder');
            $table->boolean('catalogPending_c');
            $table->boolean('consolidatedPurchasing');
            $table->boolean('constrained');
            $table->boolean('enableExpressCheckOut');
            $table->boolean('enableGlobalLock');
            $table->boolean('enableGlobalPart');
            $table->boolean('enableInActive');
            $table->boolean('enableSerialNum');
            $table->boolean('globalLock');
            $table->boolean('globalPart');
            $table->boolean('hazItem');
            $table->boolean('isConfigured');
            $table->boolean('lotBatch');
            $table->boolean('lotBeforeDt');
            $table->boolean('lotCureDt');
            $table->boolean('lotExpDt');
            $table->boolean('lotFirmware');
            $table->boolean('lotHeat');
            $table->boolean('lotLeadingZeros');
            $table->boolean('lotMfgBatch');
            $table->boolean('lotMfgDt');
            $table->boolean('lotMfgLot');
            $table->boolean('lotUseGlobalSeq');
            $table->boolean('manualMinMaxSet_c');
            $table->boolean('next500Part_c');
            $table->boolean('nonStock');
            $table->boolean('onHold');
            $table->boolean('phantomBOM');
            $table->boolean('prop65_c');
            $table->boolean('qtyBearing');
            $table->boolean('recDocReq');
            $table->boolean('samplePart_c');
            $table->boolean('shipDocReq');
            $table->boolean('specialOrder_c');
            $table->boolean('top500Part_c');
            $table->boolean('useHTSDesc');
            $table->boolean('useMaskSeq');
            $table->boolean('usePartRev');
            $table->boolean('webInStock');
            $table->dateTime('changedOn');
            $table->dateTime('createDate_c');
            $table->dateTime('createdOn');
            $table->dateTime('lastChangeDate_c');
            $table->float('diameter', 5, 2);
            $table->float('diameterInside', 5, 2);
            $table->float('diameterOutside', 5, 2);
            $table->float('fSAInstallationCost', 5, 2);
            $table->float('fSSalesUnitPrice', 5, 2);
            $table->float('fairMarketValue', 5, 2);
            $table->float('gravity', 5, 2);
            $table->float('grossWeight', 5, 2);
            $table->float('iSSuppUnitsFactor', 5, 2);
            $table->float('internalUnitPrice', 5, 2);
            $table->float('mAPPrice_c', 5, 2);
            $table->float('mtlBurRate', 5, 2);
            $table->float('netVolume');
            $table->float('netWeight', 5, 2);
            $table->float('partHeight', 5, 2);
            $table->float('partLength', 5, 2);
            $table->float('partWidth', 5, 2);
            $table->float('purchasingFactor', 5, 2);
            $table->float('rCOverThreshold', 5, 2);
            $table->float('rCUnderThreshold', 5, 2);
            $table->float('sellingFactor', 5, 2);
            $table->float('thickness', 5, 2);
            $table->float('thicknessMax', 5, 2);
            $table->float('unitPrice', 5, 2);
            $table->integer('iSOrigCountry');
            $table->integer('iSOrigCountryNum');
            $table->integer('lotDigits');
            $table->integer('lotNxtNum');
            $table->integer('lotShelfLife');
            $table->integer('mDPV');
            $table->integer('partsPerContainer');
            $table->integer('printedCatPage_c');
            $table->integer('sysRevID');
            $table->string('brand_c');
            $table->string('classDescription');
            $table->string('classID');
            $table->string('commentText');
            $table->string('commodityCode');
            $table->string('commodityCodeDescription');
            $table->string('countryNumDescription');
            $table->string('detailDescription_c');
            $table->string('eDICode');
            $table->string('grossWeightUOM');
            $table->string('hTS');
            $table->string('iUM');
            $table->string('imageFileName');
            $table->string('imageID');
            $table->string('internalPricePerCode');
            $table->string('pUM');
            $table->string('partDescription');
            $table->string('partImageName_c');
            $table->string('partLengthWidthHeightUM');
            $table->string('partNum');
            $table->string('pricePerCode');
            $table->string('prodCode');
            $table->string('prodCodeDescription');
            $table->string('purchasingFactorDirection');
            $table->string('searchWord');
            $table->string('sellingFactorDirection');
            $table->string('sysRowID');
            $table->string('typeCode');
            $table->string('uD_SysRevID');
            $table->string('uOMClassIDDescription');
            $table->string('uPCCode1');
            $table->string('uPCCode2');
            $table->string('uPCCode3');
            $table->string('webCategory_c');
            $table->string('webQtyFlag_c');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

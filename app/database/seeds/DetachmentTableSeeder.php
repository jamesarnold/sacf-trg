<?php

class DetachmentTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('detachments')->delete();

		//Detachments
		Detachment::create(['name' => 'Addlestone']);
		Detachment::create(['name' => 'Banstead']);
		Detachment::create(['name' => 'Caterham']);
		Detachment::create(['name' => 'Chertsey']);
		Detachment::create(['name' => 'Chobham']);
		Detachment::create(['name' => 'Corps of Drums']);
		Detachment::create(['name' => 'Cranleigh']);
		Detachment::create(['name' => 'Deepcut']);
		Detachment::create(['name' => 'Dorking']);
		Detachment::create(['name' => 'Farncombe']);
		Detachment::create(['name' => 'Farnham']);
		Detachment::create(['name' => 'Felbridge']);
		Detachment::create(['name' => 'Guildford']);
		Detachment::create(['name' => 'Haslemere']);
		Detachment::create(['name' => 'Horley']);
		Detachment::create(['name' => 'Leatherhead']);
		Detachment::create(['name' => 'Lingfield']);
		Detachment::create(['name' => 'Merrow']);
		Detachment::create(['name' => 'Mytchett']);
		Detachment::create(['name' => 'Pirbright']);
		Detachment::create(['name' => 'Redhill']);
		Detachment::create(['name' => 'Reigate']);
		Detachment::create(['name' => 'Walton']);
		Detachment::create(['name' => 'Woking']);
		Detachment::create(['name' => 'Yorktown']);
		
		
		//HQ
		Detachment::create(['name' => 'A Coy HQ']);
		Detachment::create(['name' => 'B Coy HQ']);
		Detachment::create(['name' => 'C Coy HQ']);
		Detachment::create(['name' => 'D Coy HQ']);
		Detachment::create(['name' => 'E Coy HQ']);
		Detachment::create(['name' => 'F Coy HQ']);
		Detachment::create(['name' => 'Trg Dept']);
		Detachment::create(['name' => 'QM Dept']);
		Detachment::create(['name' => 'Catering Dept']);
	}

}

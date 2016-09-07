<?php

use Illuminate\Database\Seeder;
use App\Subject;

class SubjectSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('subject')->delete();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK01a';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika Kelas X Semester 1';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK01b';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika Kelas X Semester 2';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BIND01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Indonesia Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BINGG01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Inggris Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SRP01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Rupa Kelas X';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SMSK01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Musik Kelas X';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAFIS01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Fisika Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPABIO01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Biologi Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAKIM01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Kimia Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSEJ01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sejarah Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSEK01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Ekonomi Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSAK01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Akuntansi Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSOS01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sosiologi Kelas X';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'PKN01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Kewarganegaraan Kelas X';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'AGM01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Agama Kelas X';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK02a';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika IPA Kelas XI Semester 1';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK02b';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika IPA Kelas XI Semester 2';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BIND02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Indonesia Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BINGG02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Inggris Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SRP02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Rupa Kelas XI';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SMSK02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Musik Kelas XI';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAFIS02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Fisika Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPABIO02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Biologi Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAKIM02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Kimia Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'PKN02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Kewarganegaraan Kelas XI';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'AGM02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Agama Kelas XI';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSEJ02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sejarah Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSEK02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Ekonomi Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSAK02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Akuntansi Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSOS02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sosiologi Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBANTR02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Antropologi Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBJPG02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Jepang Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBYJPG02';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Budaya Jepang Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBSASIND01';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Sastra Indonesia Kelas XI';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK03a';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika IPA Kelas XII Semester 1';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'MTK03b';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Matematika IPA Kelas XII Semester 2';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BIND03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Indonesia Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'BINGG03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Inggris Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SRP03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Rupa Kelas XII';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'SMSK03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Seni Musik Kelas XII';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAFIS03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Fisika Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPABIO03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Biologi Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPAKIM03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Alam Kimia Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 2;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'PKN03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Kewarganegaraan Kelas XII';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'AGM03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Agama Kelas XII';
		$subjectModel->subject_weight = 2;
		$subjectModel->consentration_id = 1;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSEJ03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sejarah Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSEK03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Ekonomi Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSAK03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Akuntansi Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IPSSOS03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Ilmu Pengetahuan Sosial Sosiologi Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 3;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBANTR03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Antropologi Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBJPG03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Bahasa Jepang Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBYJPG03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Budaya Jepang Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
		
		$subjectModel = new Subject();
		$subjectModel->code_subject = 'IBSASIND03';
		$subjectModel->created_at = \Carbon\Carbon::now();
		$subjectModel->updated_at = \Carbon\Carbon::now();
		$subjectModel->subject_name = 'Pendidikan Sastra Indonesia Kelas XII';
		$subjectModel->subject_weight = 3;
		$subjectModel->consentration_id = 4;
		$subjectModel->save();
	}
}

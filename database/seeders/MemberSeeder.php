<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [1, 3, 1, "Haapi.ZP", "Haapi#6759", null, null, "2004-10-20", 1],
            [2, 3, 1, "Dierna", "Dierna#5984", null, null, "2003-05-24", 1],
            [3, 3, 1, "Phan.v0", "PhantomX#0001", null, null, "2003-11-11", 1],
            [4, 3, 1, "LoLo.ZP", "OPTIUM#2779", null, null, "2003-04-09", 1],
            [5, 3, 1, "Harrachiilolo", "Harrachii#4071", null, null, "2001-07-24", 1],
            [6, 3, 2, "L0ndraSexual", "Astro#4095", null, null, "2001-12-07", 1],
            [7, 3, 2, "LeoSanX.MXS", "LeoSanX#2199", null, null, "2004-05-31", 1],
            [8, 2, 2, "Gxmez.MXS", "Gxmez.#9592", null, null, "2004-10-01", 1],
            [9, 3, 2, "MikaaZ.MXS", "MikaaZ#0299", null, null, "2003-05-17", 1],
            [10, 3, 2, "Ithan.MXS", "Ithan#6218", null, null, "2003-11-13", 1],
            [11, 3, 1, "h0rus10.ZP", "h0rus10#2670", null, null, "2001-06-15", 1],
            [13, 3, 1, "M1uR4.ZP", "M1uR4.#4172", null, null, "2005-02-11", 1],
            [14, 3, 1, "Onlyb4ns.ZP", "Shönen#3828", null, null, "1995-09-17", 1],
            [16, 3, 4, "ArreBo.LFT", "Rebbo#7781", null, null, "2004-08-31", 1],
            [17, 3, 4, "Askelio", "Ask.#2755", null, null, "2000-06-22", 1],
            [18, 3, 4, "Morales.Lynx", "Moraales#4424", null, null, "2005-02-05", 1],
            [19, 3, 4, "Karma.3C", "Karma.#0553", null, null, "2005-03-01", 1],
            [20, 2, 4, "Vaazquez.PAN", "Vaazquez#5073", null, null, "2003-08-16", 1],
            [21, 3, 5, "Rufus.XP", "Tito Rufus#6487", null, null, "2000-06-20", 1],
            [22, 3, 1, "Liipee.ZP", "Liipee#0524", null, null, "2002-08-02", 1],
            [23, 3, 5, "S1RP3R1.XP", "S1RP3R1#5116", null, null, "2003-10-06", 1],
            [24, 2, 5, "Plainairp48.XP", "raul/Plainairplane48#2626", null, null, "2003-05-03", 1],
            [25, 3, 5, "Banana.XP", "Banana#6078", null, null, "2003-02-24", 1],
            [26, 2, 7, "Jordi.BH", "JORDI LOPEZ#4476", null, null, "2002-08-06", 1],
            [27, 3, 7, "Zzzape.BH ", "ZzZape#5612", null, null, "1993-12-30", 1],
            [28, 3, 7, "G30RG3G.BH ", "G30RG3G#7886", null, null, "1998-12-07", 1],
            [29, 3, 7, "Shir0.BH", "Shir0Ne.-#7308", null, null, "2002-12-18", 1],
            [30, 3, 7, "Attom-_-.BH ", "Attom#4534", null, null, "2003-10-21", 1],
            [36, 3, 2, "ZzLeoWGA", "ZzLeo#0853", null, null, "2004-12-15", 1],
            [37, 3, 4, "zRxb3n06", "zRxb3n06#3645", null, null, null, 1],
            [38, 1, 4, "zUnaiii", "zUnaiii#3423", null, null, null, 1],
            [39, 1, 4, "WASSABII", "Alexima500#1363", null, null, null, 1],
            [48, 3, 1, "Perlaa.L4F", "MDT_jaime#8071", null, null, null, 1],
            [49, 3, 5, "IZANGIA.XP", "IZANGIA#3770", null, null, "2003-12-26", 1],
            [50, 3, 2, "GOR4CH.", "GORACH#2966", null, null, "2004-01-05", 1],
            [51, 3, 2, "Svl.ZEN", "Sevilla#5082", null, null, "2005-09-20", 1],
            [52, 3, 2, "Raikz.", "Raikz23#1806", null, null, "2004-04-15", 1],
            [56, 3, 4, "Aguila...", "Aguila...#8656", null, null, "2004-03-06", 1],
            [57, 3, 4, "Aquiles.Lynx", "Pedroj756#4771", null, null, "1997-08-01", 1],
            [58, 3, 4, "ThoRR.Lynx", "ThoRR.#9983", null, null, "2004-01-24", 1],
            [59, 3, 1, "Adam.ZP", "skinnyqenn#6979", null, null, "2005-03-07", 1],
            [101, 3, 5, "Sp1cyuff1ns.XP", "Sp1cy666.DN#5696", null, null, "2004-04-16", 1],
            [102, 3, 5, "Octane187.XP", "Octane_187#9117", null, null, "2004-03-22", 1]
        ];

        foreach ($members as $member)
        {
            Member::factory() -> create([
                "id" => $member[0],
                "role" => $member[1],
                "team" => $member[2],
                "nickname" => $member[3],
                "discord" => $member[4],
                "twitter" => $member[5],
                "twitch" => $member[6],
                "birthday" => $member[7],
                "active" => $member[8],
            ]);
        }
    }
}

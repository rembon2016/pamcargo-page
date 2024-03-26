<?php

declare(strict_types=1);

namespace App\Http\Controllers\LandingPage\Base;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        $sliders = Slider::latest()->get();
        return view(
            'landing-page.pages.home',
            compact('sliders')
        );
    }

    /**
     * @return View
     */
    public function about(): View
    {
        return view('landing-page.pages.about');
    }

    /**
     * @return View
     */
    public function seaAir(): View
    {
        return view('landing-page.pages.services.sea-air');
    }

    /**
     * @return View
     */
    public function landAir(): View
    {
        return view('landing-page.pages.services.land-air');
    }

    /**
     * @return View
     */
    public function contact(): View
    {
        return view('landing-page.pages.contact');
    }

    /**
     * @return View
     */
    public function rateRequest(): View
    {
        return view('landing-page.pages.rate-request');
    }

    /**
     * @return View
     */
    public function imprint(): View
    {
        return view('landing-page.pages.imprint');
    }

    /**
     * @return View
     */
    public function faq(): View
    {
        return view('landing-page.pages.faq');
    }

    /**
     * @return View
     */
    public function privacyPolicy(): View
    {
        return view('landing-page.pages.privacy-policy');
    }

    /**
     * @return View
     */
    public function news(): View
    {
        return view('landing-page.pages.news.index');
    }

    /**
     * @return View
     */
    public function newsDetail(): View
    {
        return view('landing-page.pages.news.detail');
    }
    
    public function office()
    {
        $countries = [
            (object) [
                'name' => 'United Kingdom',
                'sub_name' => NULL,
                'image' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAAAhFBMVEXIEC7///8BIWnFABjrvcEAHmgAAFnICSvKKD3HACalqb0AAGAABWHGACDEAACiqL/02NvUWWfehpD88vPEAA3eh5HEAAcAHGkAGGcAF2fTVGPUXGr99fbFABPGABkAEWUAAE7txcido7ve4OiRmLP29/rgkZry0tbPPlH56evadYHWYm+GvczdAAAG3ElEQVR4nO2dfXfTOgyHDaOMtex9K2NsF9bLGC/f//vdctsuiSslsvXmnqPfXzucUCtPbFmxHDn9uXgzpefVbDF7q6eP866tD8dpRMcfuivnHxVNmi3uVs+vTT38gIw5Wd6/pJOb+2mAb+ZvFQE2h2/dW867hq6vHk8heJdrbq9/OAJsDF8O7x8I3rbT9UhOAvykBLApfLPF5x68B6Tn7Ubs7h/OSENYxwc2hG/t8/o97/YGgtdjBRAd07nGEG4GH93n7eFLxElEAWAj+DJ4t0cjPg/AR/WB59JDuAl8s8Un8oSB4CMP4c+iABvAN1t87U8Ykz4PwUedRESHsDu+3OeB8MCRCdhoHkg748uG7e30hNHDd1pw8VBiPdAVHy1Ixnikh4Kummt+JwLQEV9ZkAzgK3GU+xKZhd3w5cMW7khjHNKGOm2aBgHyh7ATvvIgGcFHDRKVALrgqwmSUXy19LcAeUPYAd/w3fbhCoRHiIFT92fN2H+9F04gbY4vg8fw/ekra+bpxBjCxvjqg+Rc87tUsjg48WO1AE3x5T6v3mX9vd8k+YOVPdAQn3RnSdCPLuufSI0PNMOXLwyAHYW2cLztKAn+4XpnWjGEjfDlQXJ9J+lWnBLy45Y+0ASfRJC8hde7v4Q2gASSCj7QAJ/WBJnGGmHMSiVZOXV8UkHyfsdIYw1NZ5pGGqIDVManeU9pvDHJJ+WDT3dE7eHT8xMe+LT9OYBPa5ayx6cfTYD4dGIka3wWsSyCTyNCt8Vn8yaF4jP0gQr4rN7jR/BJr07Y4bOb/Ebxia6N4XGgMD5u9qzT9MQ3gW/PGI2snCg+UpBMW0EnpGEn8RkE0oL4BEMuUv6GgE8qK4UCFMOnbGctPuWnKoRvGKva5K6J+CQy8q/3nfsUEXxyQXJJ2pWMT3FGE8AnmT0rWasswKcWT7Hx+SW7ivDx9sKhhjLxeaZaC/GpDBMWvsznwS5FbcdsMT7RlYyNk2bgo60M6e3XrsAnvo5Wjc86SBbCJ7mKuwa4qMO3yGzw2KNYiU80kF6savCtFtY5GUl8khmsf2vw9f4Tp23ed3oMfJKBdAW+Dp7OMpo+PsmYqxYf4neNvlFm4pP0gTX4XPYj9vG95+vb++/dd//XV2egfj7J4/v1G26LAO/5+9psvtJkQ7aq8H2eCnwsBT6WAh9LgY+lwMdS4GMp8LEU+FgKfCyld03paQrfk7eFQ6WjtjRKb83P275M49aGQqFQKBQKhUKhUCgUCoVCoVAoFAqFQqFQKBQKhUKhQ5f3HqVMh7bDynuH3FAHt7/Pe39mpkPbXeptQKbAx1LgYynwsRT4WAp8LAU+lgIfS4GPpUPDJ1BOYlBJA9PFJVz14vevwWUi+F5+wm1dXb9eIlVJQ7aOCw7v5mSfxulR74YE8a3b+7KE2nvstydSx8UE3hcQ3uMePMHBS3lgzlWEhjWscHhgT7gB4In6votLQg/0q2E1rKCG38QZdBPL/k1wK6hx2naqoEb1edM9QKJ+H9o+oec71O+TmzCkqkdybDCuHjmsXYoaTp39hGqXsgDa1S4dVs7FjQbhQX5HrHIubgvoA4dD2KZyLvWJTxusUbcZtQceCUvuEGZVDcfhFfkb0arhhQCZgTSjZr2YocI161G7FCaR6hMTCuGNhQriJybgAEGX8gi6FFl8ck7a4ryOQvuWtbNw1WkxuHFgz5sKEVROi0FtJLgW4dNilH2L4FlFChMbFx/x3bb+qaqdlIUDrBolNfiIEwbHpyie08axV+CcNrmFAa9TAlGbRRYTCs6oxOExFyaVz6gsBFgUSJNPSFU0Qv2EVNR29iRCPJ+3EN6y6FXI4HxeHCAhTi0/n9d0JcPkdGj8HjgdgHA2Od6wUPxkdDY5eh8M9wPgY8GrWcFQw6ffEfbwsYLkuhyCIj7t0CvljUkFnef0FKAqPt17SsOGDIJkc3yaIyr1G3FadFTHp+fPU9eA9izliU+rc6Tdj+vHSL74dGLZVPJkeBG6Nz6NN6nkmWixxif/Hp8803z2+KRXkRKjO0tttDHFJxqe3RH2NpNWZqu2OPjgkwykJ/HJ5QXawSeXv5nAp7u9yw+flA8cxSebE20Ln0xWbgSfdEa+NXwSgTSKT34/SHv4+Fk5BJ+Jz9vJER8zkD4F8Vl9VLKVKz7e1g4An9ZOTFTO+Fjv/KSLRPYBo3LHx1hxyi/Q24WOqgF81eudxfAkh+1GTeCrDKRHyG7giX2Bg6oRfFWBdPeP2t9/oWoGX8ViAkC0gyf69SGqhvAVB9IbeBbfvqJqCl/hN8rmQfK+GsNXNIm83EPw0vGP3nf/Kx2ft1Nz+P73gStCfYY//wEigYBdwuNHrgAAAABJRU5ErkJggg=='
            ],
            (object) [
                'name' => 'Indonesia',
                'sub_name' => 'Jakarta',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg'
            ],
            (object) [
                'name' => 'China',
                'sub_name' => NULL,
                'image' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAjVBMVEXuHCX//wDtACb71w7uFSXuCSbuECX+8Af5xhL4sxX85Av//QDyYyD84Qz83wzyaB/zfB31lhr97QjvNyPvLiTxUyH2oxj5vxP+9wTwQiL0hRzzdR71khr5whPxWyDuJST0jBv3qRf2oRj2nBn71A/wSiLycB76zRH3rhbvPSP4uBXzeh31jxvyZh/6zxBu5cUXAAAEnUlEQVR4nO3c6XriIBgF4PIJcYlbNdbYquni1s37v7yBrDpqhYwdA573z8w80/qEY4APgt7dAQAAAMCNE/zaV1A51G8jlJRI/1iyAJkkonsimQUPGKNrX0tVUJNthiSoznxkkqGQse28y9gAmWTEE0vUkEmOakkmLdmFrn0tv0x7ElHDa3qnrMjpe4WPPM2fpDbLhQ/Br17VddG4rReKmBSR1BtvI4eLFPKbWv2AR34aSOMzorhWcZU3YqFWJrIwYf66IzMZuZyHQhvZSI02inXjeUKkhtl3xyOJ3/6Nzo2SdBd6Ycz5iXipRkyDiVVWs05Pw3fJ+87YUr83yGrW+UwGKpMXkxtFb5qyF09qDqNV3V414+BwSw9JyVF6Klm6N+BSK8nktWR/oPowDcVz5Y7hw7Q0bZXNpMsC1Zc86q0cCYXesgXMsFyL6IOFkSeo3XVmNsq6DmNv5ZqkQg1FT1b8j45kUmyIsE65JuV7byZlX6XRfbH6L/d8grJUn1yZf+QImbsv8UYL6g+S3+7aeZvQIV5EIlt16Of3XtBjveh6Vs46s27tb62dTNji8L+/fgpFPO/+dsvKUGjMDJ2ZSviy/7LduVP+UzsuilZGibSCc63kQvYvNUzXQ3tDibrngihs9DpDPBkP6a49ndm5Xub0qpmI39ZsoFpYj0kV99Y+8aFRqBPJwtMuN4ixyMbhdYeg9flIpgaTCIV29pk99HgmkfrEpJFU+7Ur/Y9oOPgpkjHpPiuNcYO93Arj1DwdyZNpT3AiEol6JxLpRPYPDmXRXe1YJA9WVuiXcvxOud2bRKHG0cHElV2QUujocNK45RtFnFgP3nImNDueyeqGO8/xrpMs50w5EqM4VZ+U6DyizE5uBe3tub0tdv7RMyrs49camP9OFZGfhxCOaPeRxod5ac9mLtwoXnHQda0252mZb6saf75APLoxW9FHFkG6De0V85DmYdnitWTx13dgmKV0s20wzN9h+jTuPF7yEEh2w0X8F8/mk9XePGl+c3fFR0HytEfvsKx6lVVz8zFuxAN0PfRVwhYvINPtk95+63ly3I/NtY/f7wzNfydsnbjr1A5rLZr7cdu0XyfoFJH0rR5ovZEqSo69q0IsjE5NcJqmiQzerY5EnSYPlyeaQF96J83zn083vE0Ok1YR+Y3T29A0MXo2kW3DaI/M1cSXXz81wCOjA8RyBArVE9ee3SUKP3P5BpGoWb0VqUNtN70btUdO32M5WNN7y/kPa2ijQbI4kLXNFKEkonnWZSi66oVUic2l60U5sYV0WVRm09ZNWTehV2fOTP8rPuFx9Uvflp7m+w3cn7WJRIDvtSiItlwzPwQDtYd77WupjPwBiBP79BeSbeN2Rk5/W4ER8Z1tqtVfA7NTb87a+QiUXA678fTvX1H+ZIxtpxOs+STapoE05m5//Ym++Kx+vWX9Fv0FiU+2vZ+QOrhy26fedvB23GHoibFvjK6pdAChtf6TwlvBucm3pdwIekYmBzDCAgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwL4/IM8nl+OH7/sAAAAASUVORK5CYII='
            ],
            (object) [
                'name' => 'India',
                'sub_name' => 'Chennai',
                'image' => 'data:image/png;base64,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'
            ],
            (object) [
                'name' => 'India',
                'sub_name' => 'Mumbai',
                'image' => 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAllBMVEX/aCAEajj/////YwgAZS0HA40AAIsAAIgAAIMAAIYAAH8AAIEAAHv19foEAI0AAHrY2Or7+/7q6vTT0+dVVKfy8fnh4e5sa7C+vttiYaxmZa6DgrzIyODDw96wr9OlpNB6ebdbWqlPTqQ/Pp1xcLO2ttaRkMNFRJ8hH5SXlsUUEpCgn8s0MpqJib8SDpOpqdAsKphOTKgOf8qvAAAFUklEQVR4nO2ba1fqOBSGnczQpOmFXugFGqAgFQEF/f9/bnYKnuNy64fzJXHG91nLLNLqWuFxd++kae/uAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP6Qv8FH7gT4CJxwvoOTpBweumbRdA9DmfgejPgGTrKHpzCUUgZBQG0YPj1kvofk10m+flQySCe/SQOpHk+511F5dfIgZTpqCCZSKSUnwSgolfLBpxWPTobAGpnI8Ol5r1dVXa30/vkplDZaZDD4G5g3J8lMkRFKIocqEclSiFKIJX2qDpRayIqaeUu3vpxkKcVDoJqNzIUZj6zG1ohcbhpFVmTqK9l6cjLYIJH35dhpx4hY2yZpxyPlvbSh4un68eNkRUrSYCGKyvaKMUT68URh26oQC0q2qVp5GZ0XJzZKgiDqbsEh5rZ5/fXJHu0iyiqeIsWHk9IqeUxsSNRjJGzsxXOmn2Rju6uamiJ5tFJKD+Pz4CQJrJL62mmsjoMNh5B+hoM931xP1VZK4KH6eHCypa+aJrc6U8+oMdTkiqZpM1uCZlddg0hSkrd1P0D3TlYhFeGIkms3djdUaRKdi0pXItcUFe14/dizVUQlOXSfZ507yWnyKhfWR761E/gionYyiEIXYpjQ0aj4da5bSJrSOp/mO3fyTKua/fVjcrZff7GgrDITdVyLWXPtiuJcXX9lTyuhZ9dDdO0kCVMqJsW1U4c0VS2mS7HWeanLXK/FckrnsvCWgQsqUWnoOs26dnKgMNmJYn390mVMC51GilK3RptWl0JSqCzjawUu1oXYUaAcHI/RtZMzlRJbay+7MVba6YUySiPUfBkt50o0lE0u03GCX+wu1DZUpM6Ox+jYSamokqT2U/W6sFZO02cSUd4fKU6O9yXpeZ6e6HjR7MeUklKVcj1xc+ykkxP5dhdtiBqy0ummimaDynQWDbOo2unOxkh0m9XnJ/qLzu0gHTs5pu9qa7KZ0hW00H0bZ8qERmVx22taGe6mm1951Sblo9tBunVSKSrEiVne6o5ow2hX9fHQd505mq7rh5j6Udi+/f7SJFSOVeV0lG6dmHCsIslqvjlcty2aSLVDnL2U/WtfvmTxsFTRwkZSXp7m80s1VqrQOB2lWycXqsTjDJW0bPW5WZei3MZ99nSSMpDy9JT18ZaOXXZHvV+N0hJaHsmL01G6dUIpdqLf/unJMNNa7duseznZ226TVJ1e+qzdK623w1tCMXriOsm6dWJnYO9vE+XD/KhUV8rrFk8qy05F5/nwfokzjLM8l7h1sgl+z9TzqqhLY5aZMb287XjJ3hjqG1MX1ZsXKjzBxuko3TqZkZOiXK2716NUkY61jujyOd4HNyfB62M4HotjrcLJ/e60MjU5mTkdpfc4MSxOlsaUPyhOkE84n9ad+mfXnS/nJ+sv5yf5/31+gnksB+udT6B1cfj1urj+Yl386HaQuH/CwX02zje6H2t+6P1Y3Lf/BOzvfAL2ATnjfvH83X6x+rBfrN7tF89/xn6xWKk/eq7Aw/NbeP6Eg+eUOHiejYPnHjl4PpaD56g5eN6eg/cyOHh/h/Nd3/PyOSy8D8jBe6Mc704E3i/+LwAnnLt/wEfu/gIfgRMOnHDghAMnHDjhwAkHTjhwwoETDpxw4IQDJxw44cAJB044cMKBEw6ccOCEAyccOOHACQdOOHDCgRMOnHDghAMnHDjhwAkHTjhwwoETDpxw4IQDJxw44cAJB044cMKBEw6ccOCEAyccOOHACQdOOHDCgRMOnHDghAMnHDjhwAkHTjhwwoETDpxw4ITzL675QprvfCfbAAAAAElFTkSuQmCC'
            ],
            (object) [
                'name' => 'Korea Selatan',
                'sub_name' => NULL,
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/09/Flag_of_South_Korea.svg'
            ],
        ];

        return view('landing-page.pages.office', compact('countries'));
    }
}
